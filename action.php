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


//================================ Search List ================================
// Add Session
if (isset($_POST['addSessionBtn'])) {
    $pId = $_POST['pId'];
    $Breakfast = $_POST['Breakfast'];
    $Lunch = $_POST['Lunch'];
    $Dinner = $_POST['Dinner'];
    $sessionDate = $_POST['sessionDate'];
    $todayDate = substr($sessionDate, 8, 2);


    $sql = "SELECT * FROM patientsubsistence WHERE date='$sessionDate' AND pId = '$pId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $breakfast = $row['breakfast'];
            $lunch = $row['lunch'];
            $dinner = $row['dinner'];

            if ($breakfast == 'on' && $lunch == 'on' && $dinner == 'on') {
                switch ($todayDate) {
                    case 28:
                        $sql2 = "UPDATE patientsubsistence SET 
                            breakfast='{$Breakfast}', 
                            lunch='{$Lunch}', 
                            dinner='{$Dinner}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
            } else if ($breakfast == 'on' && $lunch == 'on') {
                switch ($todayDate) {
                    case 28:
                        $sql2 = "UPDATE patientsubsistence SET 
                            breakfast='{$Breakfast}', 
                            lunch='{$Lunch}', 
                            dinner='{$Dinner}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
            } else if ($breakfast == 'on' && $dinner == 'on') {
                switch ($todayDate) {
                    case 28:
                        $sql2 = "UPDATE patientsubsistence SET 
                            breakfast='{$Breakfast}', 
                            lunch='{$Lunch}', 
                            dinner='{$Dinner}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
            } else if ($breakfast == 'on') {
                switch ($todayDate) {
                    case 28:
                        $sql2 = "UPDATE patientsubsistence SET 
                            breakfast='{$Breakfast}', 
                            lunch='{$Lunch}', 
                            dinner='{$Dinner}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
            } else {
                switch ($todayDate) {
                    case 28:
                        $sql2 = "UPDATE patientsubsistence SET 
                            breakfast='{$Breakfast}', 
                            lunch='{$Lunch}', 
                            dinner='{$Dinner}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
            }
        }
    } else {
        $sql = "INSERT INTO patientsubsistence (pId, breakfast, lunch, dinner, date) VALUES ('$pId', '$Breakfast', '$Lunch', '$Dinner', '$sessionDate')";
        if (mysqli_query($conn, $sql)) {
            header('Location: searchList.php?uId=' . $pId . '');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        exit();
    }
}

if (isset($_GET['updateSession'])) {
    $pId = $_GET['uId'];
    $sql = "SELECT * FROM patientsubsistence";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $breakfast = $row['breakfast'];
            $lunch = $row['lunch'];
            $dinner = $row['dinner'];
            $rpId = $row['pId'];
            $sessionDate = $row['date'];
            $listOfDayArray = array("day1", "day2", "day28");

            // Loop Array
            for ($listOfDay = 0; count($listOfDayArray) >= $listOfDay; $listOfDay++) {

                //Breakfast Lunch Dinner
                if ($breakfast == 'on' && $lunch == 'on' && $dinner == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Breakfast Lunch 
                else if ($breakfast == 'on' && $lunch == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Breakfast Dinner
                else if ($breakfast == 'on' && $dinner == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Dinner Lunch
                else if ($dinner == 'on' && $lunch == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Breakfast
                else if ($breakfast == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Lunch
                else if ($lunch == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Dinner
                else if ($dinner == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Default
                else {
                    if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
            }
        }
    }
}
