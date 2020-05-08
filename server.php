<?php
$conn = mysqli_connect('localhost', 'root', '', 'sweeper');
if (!$conn) {
  die('Connection failed ' . mysqli_error($conn));
}

//Search Patient
if (isset($_POST['searchText'])) {
  $inpText = $_POST['searchText'];
  $query = "SELECT * FROM patient WHERE lastName LIKE '%$inpText%' OR firstName LIKE '%$inpText%'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo ' <a href="searchList.php?id=' . $row['id'] . '" id="searchList" class="list-group-item list-group-item-action border-1">' . $row['lastName'] .  ', ' . $row['firstName'] . ' ' . $row['middleName'] . '</a>';
    }
  } else {
    echo ' <a href="#" class="list-group-item list-group-item-action border-1">No Result</a>';
  }
}

//Save Patient Info
if (isset($_POST['save'])) {

  $lastName = $_POST['lastName'];
  $firstName = $_POST['firstName'];
  $middleName = $_POST['middleName'];
  $birthDate = $_POST['birthDate'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $origin = $_POST['origin'];
  $barangay = $_POST['barangay'];
  $municipality = $_POST['municipality'];
  $contactNumber = $_POST['contactNumber'];


  $sql = "INSERT INTO patient (lastName, firstName, middleName, birthday, age, sex, origin, barangay, municipality, contactNumber) 
      VALUES ('$lastName', '$firstName', '$middleName', '$birthDate', '$age', '$sex', '$origin', '$barangay', '$municipality', '$contactNumber')";
  if (mysqli_query($conn, $sql)) {
    $saved_user = '
        <script>
        window.setTimeout(function() {
            $("#alert_message").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
            });
          }, 3000);
        </script>
        <div id="alert_message" class="alert alert-info text-center">
          Succesfully Added a new Patient!
        </div>
        ';
    echo $saved_user;
  } else {
    echo "Error: " . mysqli_error($conn);
  }
  exit();
}

if (isset($_POST['export'])) {
  $municipality = $_POST['municipality'];

  // Get Date and Time
  date_default_timezone_set("Asia/Manila");
  $currentDate = date("Y/m/d");

  $filename = "sweeper-$currentDate.xls"; // File Name
  // Download file
  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");


  $sql = "SELECT * FROM patient WHERE municipality = '$municipality'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $flag = false;
    while ($row = mysqli_fetch_assoc($result)) {
      if (!$flag) {
        // display field/column names as first row
        $output = implode("\t", array_keys($row)) . "\r\n";
        $output = mb_convert_encoding($output, 'UTF-16LE', 'UTF-8');
        echo $output;
        $flag = true;
      }
      $output = implode("\t", array_values($row)) . "\r\n";
      $output = mb_convert_encoding($output, 'UTF-16LE', 'UTF-8');
      echo $output;
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
}

// // delete comment fromd database
// if (isset($_GET['delete'])) {
//     $id = $_GET['id'];
//     $sql = "DELETE FROM comments WHERE id=" . $id;
//     mysqli_query($conn, $sql);
//     exit();
// }
// if (isset($_POST['update'])) {
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $comment = $_POST['comment'];
//     $sql = "UPDATE comments SET name='{$name}', comment='{$comment}' WHERE id=" . $id;
//     if (mysqli_query($conn, $sql)) {
//         $id = mysqli_insert_id($conn);
//         $saved_comment = '<div class="comment_box">
//   		  <span class="delete" data-id="' . $id . '" >delete</span>
//   		  <span class="edit" data-id="' . $id . '">edit</span>
//   		  <div class="display_name">' . $name . '</div>
//   		  <div class="comment_text">' . $comment . '</div>
//   	  </div>';
//         echo $saved_comment;
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
//     exit();
// }

// // Retrieve comments from database
// $sql = "SELECT * FROM comments";
// $result = mysqli_query($conn, $sql);
// $comments = '<div id="display_area">';
// while ($row = mysqli_fetch_array($result)) {
//     $comments .= '<div class="comment_box">
//   		  <span class="delete" data-id="' . $row['id'] . '" >delete</span>
//   		  <span class="edit" data-id="' . $row['id'] . '">edit</span>
//   		  <div class="display_name">' . $row['name'] . '</div>
//   		  <div class="comment_text">' . $row['comment'] . '</div>
//   	  </div>';
// }
// $comments .= '</div>';
