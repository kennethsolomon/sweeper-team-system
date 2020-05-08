$(document).ready(function () {
  // search patient from database
  $("#search").keyup(function () {
    const searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "server.php",
        method: "POST",
        data: {
          searchText: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
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
  $(document).on("click", "#saveBtn", function () {
    var lastName = $("#lastName").val();
    var firstName = $("#firstName").val();
    var middleName = $("#middleName").val();
    var birthDate = $("#birthDate").val();
    var age = $("#age").val();
    var sex = $("#sex").val();
    var origin = $("#origin").val();
    var barangay = $("#barangay").val();
    var municipality = $("#municipality").val();
    var contactNumber = $("#contactNumber").val();
    $.ajax({
      url: "server.php",
      type: "POST",
      data: {
        save: 1,
        lastName: lastName,
        firstName: firstName,
        middleName: middleName,
        birthDate: birthDate,
        age: age,
        sex: sex,
        origin: origin,
        barangay: barangay,
        municipality: municipality,
        contactNumber: contactNumber,
      },
      success: function (response) {
        $("#lastName").val("");
        $("#firstName").val("");
        $("#middleName").val("");
        $("#birthDate").val("");
        $("#age").val("");
        $("#sex").val("");
        $("#origin").val("");
        $("#barangay").val("");
        $("#municipality").val("");
        $("#contactNumber").val("");
        $("#display_area").append(response);
      },
    });
  });
  $(document).on("click", "#exportMunicipalityBtn", function () {
    var municipality = $("#municipalityModal").val();
    $.ajax({
      url: "server.php",
      type: "POST",
      data: {
        export: 1,
        municipality: municipality,
      },
      success: function (response) {
        $("#municipality").val("");
        window.location = "action.php?exportMunicipality=" + municipality;
        // window.open(response, "_blank");
        // $("#display_area").append(response);
      },
    });
  });

  // delete from database
  $(document).on("click", ".delete", function () {
    var id = $(this).data("id");
    $clicked_btn = $(this);
    $.ajax({
      url: "server.php",
      type: "GET",
      data: {
        delete: 1,
        id: id,
      },
      success: function (response) {
        // remove the deleted comment
        $clicked_btn.parent().remove();
        $("#name").val("");
        $("#comment").val("");
      },
    });
  });
  var edit_id;
  var $edit_comment;
  $(document).on("click", ".edit", function () {
    edit_id = $(this).data("id");
    $edit_comment = $(this).parent();
    // grab the comment to be editted
    var name = $(this).siblings(".display_name").text();
    var comment = $(this).siblings(".comment_text").text();
    // place comment in form
    $("#name").val(name);
    $("#comment").val(comment);
    $("#submit_btn").hide();
    $("#update_btn").show();
  });
});
