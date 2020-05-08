<?php
$conn = mysqli_connect('localhost', 'root', '', 'sweeper');
if (!$conn) {
    die('Connection failed ' . mysqli_error($conn));
}
if (isset($_GET['deleteSession'])) {
    $pId = $_GET['uId'];
    $sId = $_GET['id'];
    $sql = "DELETE FROM patientsubsistence WHERE id=$sId";

    if (mysqli_query($conn, $sql)) {
        header("Location: searchList.php?uId=$pId&deleteSession=1");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}



if (isset($_POST['updatePatientBtn'])) {
    $pId = $_POST['pId'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $birthDate = $_POST['birthday'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $origin = $_POST['origin'];
    $barangay = $_POST['barangay'];
    $municipality = $_POST['municipality'];
    $contactNumber = $_POST['contactNumber'];


    $sql = "UPDATE patient SET 
      lastName='{$lastName}', 
      firstName='{$firstName}', 
      middleName='{$middleName}', 
      birthday='{$birthDate}',
      age='{$age}',
      sex='{$sex}',
      origin='{$origin}',
      barangay='{$barangay}',
      municipality='{$municipality}',
      contactNumber='{$contactNumber}' 
      WHERE id='$pId'";
    if (mysqli_query($conn, $sql)) {
        header('Location: searchList.php?id=' . $pId . '&status=newUpdate');
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
    $Npo = $_POST['Npo'];
    $Gl = $_POST['Gl'];
    $all = $_POST['all'];
    $sessionDate = $_POST['sessionDate'];
    $todayDate = substr($sessionDate, 8, 2);
    $monthAndYear = substr($sessionDate, 0, 7);




    $sql = "SELECT * FROM patientsubsistence WHERE date='$sessionDate' AND pId = '$pId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        if ($all == "on") {
            switch ($todayDate) {
                case '01':
                    $updateAll = "UPDATE patientsubsistence SET 
                        breakfast='on', 
                        lunch='on', 
                        dinner='on',
                            npo='$Npo',
                            gl='$Gl'
                        WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '02':
                    $updateAll = "UPDATE patientsubsistence SET 
                        breakfast='on', 
                        lunch='on', 
                        dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                        WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '03':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '04':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '05':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '06':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '07':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '08':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '09':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '10':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '11':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '12':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '13':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '14':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '15':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '16':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '17':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '18':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '19':
                    $updateAll = "UPDATE patientsubsistence SET 
                                breakfast='on', 
                                lunch='on', 
                                dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '20':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '21':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '22':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '23':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '24':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '25':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '26':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '27':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '28':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '29':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '30':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                case '31':
                    $updateAll = "UPDATE patientsubsistence SET 
                            breakfast='on', 
                            lunch='on', 
                            dinner='on',
                            npo='{$Npo}',
                            gl='{$Gl}'
                            WHERE date='$sessionDate' AND pId = '$pId'";
                    if (mysqli_query($conn, $updateAll)) {
                        header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                    }
                    break;
                default:
                    echo "Something went wrong!";
            }
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $breakfast = $row['breakfast'];
                $lunch = $row['lunch'];
                $dinner = $row['dinner'];
                $npo = $row['npo'];
                $gl = $row['gl'];
                if ($breakfast == 'on' && $lunch == 'on' && $dinner == 'on') {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                npo='{$Npo}',
                                gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                npo='{$Npo}',
                                gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                } else if ($breakfast == 'on' && $lunch == 'on') {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                } else if ($breakfast == 'on' && $dinner == 'on') {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                } else if ($breakfast == 'on') {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                } else if ($npo == 'on') {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                } else if ($gl == 'on') {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                } else {
                    switch ($todayDate) {
                        case '01':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '02':
                            $sql2 = "UPDATE patientsubsistence SET 
                                breakfast='{$Breakfast}', 
                                lunch='{$Lunch}', 
                                dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '03':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '04':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '05':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '06':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '07':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '08':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '09':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '10':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '11':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '12':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '13':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '14':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '15':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '16':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '17':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '18':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '19':
                            $sql2 = "UPDATE patientsubsistence SET 
                                        breakfast='{$Breakfast}', 
                                        lunch='{$Lunch}', 
                                        dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                        WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '20':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '21':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '22':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '23':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '24':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '25':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '26':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '27':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '28':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '29':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '30':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        case '31':
                            $sql2 = "UPDATE patientsubsistence SET 
                                    breakfast='{$Breakfast}', 
                                    lunch='{$Lunch}', 
                                    dinner='{$Dinner}',
                                    npo='{$Npo}',
                                    gl='{$Gl}'
                                    WHERE date='$sessionDate' AND pId = '$pId'";
                            if (mysqli_query($conn, $sql2)) {
                                header('Location: searchList.php?uId=' . $pId . '&addSession=' . $sessionDate . '');
                            }
                            break;
                        default:
                            echo "Something went wrong!";
                    }
                }
            }
        }
    } else {
        $sql = "INSERT INTO patientsubsistence (pId, breakfast, lunch, dinner, npo, gl, date) VALUES ('$pId', '$Breakfast', '$Lunch', '$Dinner', '$Npo', '$Gl', '$sessionDate')";
        if (mysqli_query($conn, $sql)) {
            $sql2 = "SELECT * FROM reports WHERE SUBSTRING(date, 1,7) ='$monthAndYear' AND pId = '$pId'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                header('Location: searchList.php?uId=' . $pId . '&addSession=1');
            } else {

                $sql3 = "SELECT * FROM patient WHERE uId = '$pId'";
                $result3 = mysqli_query($conn, $sql3);
                if (mysqli_num_rows($result3) > 0) {
                    while ($row2 = mysqli_fetch_assoc($result3)) {
                        $lastName = $row2['lastName'];
                        $firstName = $row2['firstName'];
                        $middleName = $row2['middleName'];
                        $ward = $row2['ward'];
                    }
                    $sql4 = "INSERT INTO reports (pId, date, lastName, firstName, middleName, ward) VALUES ('$pId', '$sessionDate', '$lastName', '$firstName', '$middleName', '$ward')";
                    if (mysqli_query($conn, $sql4)) {

                        header('Location: searchList.php?uId=' . $pId . '&addSession=1');
                    }
                }
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        exit();
    }
}

// if (isset($_GET['updateSession'])) {
//     $sql = "SELECT * FROM patientsubsistence";
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             $breakfast = $row['breakfast'];
//             $lunch = $row['lunch'];
//             $dinner = $row['dinner'];
//             $gl = $row['gl'];
//             $npo = $row['npo'];
//             $pId = $row['pId'];
//             $sessionDate = $row['date'];
//             $getTodayDate = substr($sessionDate, 8, 2);
//             $monthAndYear = substr($sessionDate, 0, 7);
//             $todayDate = 'day' . $getTodayDate;
//             $listOfDayArray = array("day01", "day02", "day03", "day04", "day05", "day06", "day07", "day08", "day09", "day10", "day11", "day12", "day13", "day14", "day15", "day16", "day17", "day18", "day19", "day20", "day21", "day22", "day23", "day24", "day25", "day26", "day27", "day28", "day29", "day30", "day31");
//             // Loop listOfDayArray
//             for ($listOfDay = 0; count($listOfDayArray) > $listOfDay; $listOfDay++) {
//                 //Breakfast Lunch Dinner
//                 if ($breakfast == 'on' && $lunch == 'on' && $dinner == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'bld' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 //Breakfast Lunch 
//                 else if ($breakfast == 'on' && $lunch == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'bl' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 //Breakfast Dinner
//                 else if ($breakfast == 'on' && $dinner == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'bd' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 //Dinner Lunch
//                 else if ($dinner == 'on' && $lunch == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'dl' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 //Breakfast
//                 else if ($breakfast == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'b' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 //Lunch
//                 else if ($lunch == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'l' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 //Dinner
//                 else if ($dinner == 'on') {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = 'd' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//                 // //NPO
//                 // else if ($npo == 'on') {
//                 //     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                 //         $sql2 = "UPDATE reports SET $todayDate = 'NPO' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                 //         if (mysqli_query($conn, $sql2)) {
//                 //             header('Location: index.php?updateSession=1');
//                 //         }
//                 //     }
//                 // }
//                 // //GL
//                 // else if ($gl == 'on') {
//                 //     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                 //         $sql2 = "UPDATE reports SET $todayDate = 'GL' WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                 //         if (mysqli_query($conn, $sql2)) {
//                 //             header('Location: index.php?updateSession=1');
//                 //         }
//                 //     }
//                 // }
//                 // //Default
//                 else {
//                     if ($listOfDayArray[$listOfDay] == $todayDate) {
//                         $sql2 = "UPDATE reports SET $todayDate = NULL WHERE pId = '$pId' AND SUBSTRING(date, 1,7) ='$monthAndYear'";
//                         if (mysqli_query($conn, $sql2)) {
//                             header('Location: index.php?updateSession=1');
//                         }
//                     }
//                 }
//             }
//         }
//     } else {
//         header("Location: index.php");
//     }
// }

if (isset($_GET['exportAllData'])) {
    // Get Date and Time
    date_default_timezone_set("Asia/Manila");
    $currentDate = date("Y/m/d");

    $filename = "sweeper-$currentDate.xls"; // File Name
    // Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");


    $sql = "SELECT * FROM patient";
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

if (isset($_GET['exportMunicipality'])) {

    $selectedMunicipality = $_GET['exportMunicipality'];

    // Get Date and Time
    date_default_timezone_set("Asia/Manila");
    $currentDate = date("Y/m/d");

    $filename = "sweeper-$currentDate.xls"; // File Name
    // Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $sql = "SELECT * FROM patient WHERE municipality ='$selectedMunicipality'";
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
}
