$(document).ready(function() {
  // search patient from database
  $("#search").keyup(function() {
    const searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "server.php",
        method: "POST",
        data: {
          searchText: searchText
        },
        success: function(response) {
          $("#show-list").html(response);
        }
      });
    } else {
      $("#show-list").html("");
    }
  });
  // $(document).on("click", "#searchList", function () {
  //   $("#search").val($(this).text());
  //   $("#show-list").html("");
  // });

  // save comment to database
  $(document).on("click", "#saveBtn", function() {
    const generatedId =
      Date.now().toString(36) +
      Math.random()
        .toString(36)
        .substr(2);

    var uId = generatedId;
    var lastName = $("#lastName").val();
    var firstName = $("#firstName").val();
    var middleName = $("#middleName").val();
    var dateOfBirth = $("#dateOfBirth").val();

    var Breakfast = $("#Breakfast").val();
    var Lunch = $("#Lunch").val();
    var Dinner = $("#Dinner").val();
    var Npo = $("#Npo").val();
    var Gl = $("#Gl").val();
    var sessionDate = $("#sessionDate").val();

    if (
      lastName == "" ||
      firstName == "" ||
      middleName == "" ||
      // dateOfBirth == "" ||
      ward == ""
    ) {
      const emptyFields =
        '<div id="alert_message" class="alert alert-danger text-center">' +
        "You need to fill all the fields!" +
        "</div>";

      window.setTimeout(function() {
        $("#alert_message")
          .fadeTo(500, 0)
          .slideUp(500, function() {
            $(this).remove();
          });
      }, 3000);
      $("#display_area").append(emptyFields);
    } else {
      $.ajax({
        url: "server.php",
        type: "POST",
        data: {
          save: 1,
          uId: uId,
          lastName: lastName,
          firstName: firstName,
          middleName: middleName,
          dateOfBirth: dateOfBirth,
          ward: ward,
          Breakfast: Breakfast,
          Lunch: Lunch,
          Dinner: Dinner,
          Npo: Npo,
          Gl: Gl,
          sessionDate: sessionDate
        },
        success: function(response) {
          $("#lastName").val("");
          $("#firstName").val("");
          $("#middleName").val("");
          // $("#dateOfBirth").val("");
          $("#ward").val("");
          $("#Breakfast").val("");
          $("#Lunch").val("");
          $("#Dinner").val("");
          $("#Npo").val("");
          $("#Gl").val("");
          $("#sessionDate").val("");

          $("#display_area").append(response);
        }
      });
    }
  });

  // delete from database
  $(document).on("click", ".delete", function() {
    var id = $(this).data("id");
    $clicked_btn = $(this);
    $.ajax({
      url: "server.php",
      type: "GET",
      data: {
        delete: 1,
        id: id
      },
      success: function(response) {
        // remove the deleted comment
        $clicked_btn.parent().remove();
        $("#name").val("");
        $("#comment").val("");
      }
    });
  });
  var edit_id;
  var $edit_comment;
  $(document).on("click", ".edit", function() {
    edit_id = $(this).data("id");
    $edit_comment = $(this).parent();
    // grab the comment to be editted
    var name = $(this)
      .siblings(".display_name")
      .text();
    var comment = $(this)
      .siblings(".comment_text")
      .text();
    // place comment in form
    $("#name").val(name);
    $("#comment").val(comment);
    $("#submit_btn").hide();
    $("#update_btn").show();
  });
});
