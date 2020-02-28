<?php
$conn = mysqli_connect('localhost', 'root', '', 'dietary');
if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
}

if (isset($_POST['updatePatientBtn'])) {
    $pId = $_POST['pId'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $ward = $_POST['ward'];

    $sql = "UPDATE patient SET 
      lastName='{$lastName}', 
      firstName='{$firstName}', 
      middleName='{$middleName}', 
      dateOfBirth='{$dateOfBirth}', 
      ward='{$ward}' 
      WHERE uId='$pId'";
    if (mysqli_query($conn, $sql)) {
        echo '
      <div class="card-body" id="patientInfo">
        <form method="post">
            <div class="row">
                <input type="hidden" class="form-control" name="pId" id="pId" value="' . $pId . '">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName" value="' . $lastName . '">
                        </div>
                    </div>
                    <div class="col-md-4 px-1">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName" value="' . $firstName . '">
                        </div>
                    </div>
                    <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" placeholder="Middle Name" name="middleName" id="middleName" value="' . $middleName . '">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" placeholder="Date of Birth" name="dateOfBirth" id="dateOfBirth" value="' . $dateOfBirth . '">
                        </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="form-group">
                            <label>Ward</label>
                            <select id="ward" name="ward" class="form-control">
                                <option value="' . $ward . '">' . $ward . '</option>
                                <option value="General">General</option>
                                <option value="Pedia/Surgery">Pedia/Surgery</option>
                                <option value="OB">OB</option>
                                <option value="Rehy/ISO">Rehy/ISO</option>
                            </select>
                        </div>
                    </div>
                </div>
        
                <button type="submit" name="updatePatientBtn" class="btn btn-info btn-fill pull-right">Update Patient Info</button>
                <div class="clearfix"></div>
        </form>
      </div>
      ';
        header('Location: searchList.php?uId=' . $pId . '&status=newUpdate');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    exit();
}

//================================ Search List ================================
// Save
//Save Patient Info
if (isset($_POST['addSessionBtn'])) {
    $pId = $_POST['pId'];
    $Breakfast = $_POST['Breakfast'];
    $Lunch = $_POST['Lunch'];
    $Dinner = $_POST['Dinner'];
    $sessionDate = $_POST['sessionDate'];


    $sql = "SELECT * FROM patientsubsistence WHERE date='$sessionDate'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $sql2 = "UPDATE patientsubsistence SET 
        breakfast='{$Breakfast}', 
        lunch='{$Lunch}', 
        dinner='{$Dinner}'
        WHERE date='$sessionDate'";
        if (mysqli_query($conn, $sql2)) {
            header('Location: searchList.php?uId=' . $pId . '&addSession=1');
        }
    } else {
        $sql = "INSERT INTO patientSubsistence (pId, breakfast, lunch, dinner, date) VALUES ('$pId', '$Breakfast', '$Lunch', '$Dinner', '$sessionDate')";
        if (mysqli_query($conn, $sql)) {
            header('Location: searchList.php?uId=' . $pId . '');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        exit();
    }
}

//Generate Reports Btn
// if (isset($_POST['generateReportBtn'])) {
//     $pId = $_POST['pId'];
//     $Breakfast = $_POST['Breakfast'];
//     $Lunch = $_POST['Lunch'];
//     $Dinner = $_POST['Dinner'];
//     $sessionDate = $_POST['sessionDate'];

//     $sql = "SELECT * FROM patientsubsistence WHERE date='$sessionDate'";
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) > 0) {

//         $sql2 = "UPDATE patientsubsistence SET 
//         breakfast='{$Breakfast}', 
//         lunch='{$Lunch}', 
//         dinner='{$Dinner}'
//         WHERE date='$sessionDate'";
//         if (mysqli_query($conn, $sql2)) {
//             header('Location: searchList.php?uId=' . $pId . '&addSession=1');
//         }
//     } else {
//         $sql = "INSERT INTO patientSubsistence (pId, breakfast, lunch, dinner, date) VALUES ('$pId', '$Breakfast', '$Lunch', '$Dinner', '$sessionDate')";
//         if (mysqli_query($conn, $sql)) {
//             header('Location: searchList.php?uId=' . $pId . '');
//         } else {
//             echo "Error: " . mysqli_error($conn);
//         }
//         exit();
//     }
// }
