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
            $listOfDayArray = array("day1", "day2", "day3", "day4", "day5", "day6", "day7", "day8", "day9", "day10", "day11", "day12", "day13", "day14", "day15", "day16", "day17", "day18", "day19", "day20", "day21", "day22", "day23", "day24", "day25", "day26", "day27", "day28", "day29", "day30", "day31");

            // Loop listOfDayArray
            for ($listOfDay = 0; count($listOfDayArray) >= $listOfDay; $listOfDay++) {

                //Breakfast Lunch Dinner
                if ($breakfast == 'on' && $lunch == 'on' && $dinner == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'bld' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Breakfast Lunch 
                else if ($breakfast == 'on' && $lunch == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'bl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Breakfast Dinner
                else if ($breakfast == 'on' && $dinner == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'bd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Dinner Lunch
                else if ($dinner == 'on' && $lunch == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else  if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'dl' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Breakfast
                else if ($breakfast == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'b' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Lunch
                else if ($lunch == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'l' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Dinner
                else if ($dinner == 'on') {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = 'd' WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
                //Default
                else {
                    if ($listOfDayArray[$listOfDay] == 'day1') {
                        $sql2 = "UPDATE patientsubsistence SET day1 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day2') {
                        $sql2 = "UPDATE patientsubsistence SET day2 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day3') {
                        $sql2 = "UPDATE patientsubsistence SET day3 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day4') {
                        $sql2 = "UPDATE patientsubsistence SET day4 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day5') {
                        $sql2 = "UPDATE patientsubsistence SET day5 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day6') {
                        $sql2 = "UPDATE patientsubsistence SET day6 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day7') {
                        $sql2 = "UPDATE patientsubsistence SET day7 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day8') {
                        $sql2 = "UPDATE patientsubsistence SET day8 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day9') {
                        $sql2 = "UPDATE patientsubsistence SET day9 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day10') {
                        $sql2 = "UPDATE patientsubsistence SET day10 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day11') {
                        $sql2 = "UPDATE patientsubsistence SET day11 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day12') {
                        $sql2 = "UPDATE patientsubsistence SET day12 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day13') {
                        $sql2 = "UPDATE patientsubsistence SET day13 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day14') {
                        $sql2 = "UPDATE patientsubsistence SET day14 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day15') {
                        $sql2 = "UPDATE patientsubsistence SET day15 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day16') {
                        $sql2 = "UPDATE patientsubsistence SET day16 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day17') {
                        $sql2 = "UPDATE patientsubsistence SET day17 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day18') {
                        $sql2 = "UPDATE patientsubsistence SET day18 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day19') {
                        $sql2 = "UPDATE patientsubsistence SET day19 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day20') {
                        $sql2 = "UPDATE patientsubsistence SET day20 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day21') {
                        $sql2 = "UPDATE patientsubsistence SET day21 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day22') {
                        $sql2 = "UPDATE patientsubsistence SET day22 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day23') {
                        $sql2 = "UPDATE patientsubsistence SET day23 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day24') {
                        $sql2 = "UPDATE patientsubsistence SET day24 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day25') {
                        $sql2 = "UPDATE patientsubsistence SET day25 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day26') {
                        $sql2 = "UPDATE patientsubsistence SET day26 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day27') {
                        $sql2 = "UPDATE patientsubsistence SET day27 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day28') {
                        $sql2 = "UPDATE patientsubsistence SET day28 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day29') {
                        $sql2 = "UPDATE patientsubsistence SET day29 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day30') {
                        $sql2 = "UPDATE patientsubsistence SET day30 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    } else if ($listOfDayArray[$listOfDay] == 'day31') {
                        $sql2 = "UPDATE patientsubsistence SET day31 = NULL WHERE date='$sessionDate' AND pId = '$rpId'";
                        if (mysqli_query($conn, $sql2)) {
                            header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                        }
                    }
                }
            }
        }
    }
}
