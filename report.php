<?php include('server.php'); ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dietary</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 reportsButton">
                        <a href="index.php" type="submit" class="btn btn-danger btn-fill mt-2 .no-print">Back</a>
                        <button type="submit" data-toggle="modal" data-target="#generateReportsModal" class="btn btn-info btn-fill mt-2 .no-print" onclick="window.print();return false;">Print</button>
                    </div>
                </div>
                <!-- End Row -->
                <div class="row mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NAME</th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">5</th>
                                <th scope="col">6</th>
                                <th scope="col">7</th>
                                <th scope="col">8</th>
                                <th scope="col">9</th>
                                <th scope="col">10</th>
                                <th scope="col">11</th>
                                <th scope="col">12</th>
                                <th scope="col">13</th>
                                <th scope="col">14</th>
                                <th scope="col">15</th>
                                <th scope="col">16</th>
                                <th scope="col">17</th>
                                <th scope="col">18</th>
                                <th scope="col">19</th>
                                <th scope="col">20</th>
                                <th scope="col">21</th>
                                <th scope="col">22</th>
                                <th scope="col">23</th>
                                <th scope="col">24</th>
                                <th scope="col">25</th>
                                <th scope="col">26</th>
                                <th scope="col">27</th>
                                <th scope="col">28</th>
                                <th scope="col">29</th>
                                <th scope="col">30</th>
                                <th scope="col">31</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $month = $_GET['month'];
                            $year = $_GET['year'];
                            $pId = $_GET['pId'];
                            $ward = $_GET['ward'];
                            $monthAndYear = $year . '-' . $month;

                            $sql = "SELECT * FROM reports WHERE SUBSTRING(date, 1,7) ='$monthAndYear' AND ward='$ward'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $pId = $row['pId'];
                                    $lastName = $row['lastName'];
                                    $firstName = $row['firstName'];
                                    $middleName = $row['middleName'];
                                    $day01 = $row['day01'];
                                    $day02 = $row['day02'];
                                    $day03 = $row['day03'];
                                    $day04 = $row['day04'];
                                    $day05 = $row['day05'];
                                    $day06 = $row['day06'];
                                    $day07 = $row['day07'];
                                    $day08 = $row['day08'];
                                    $day09 = $row['day09'];
                                    $day10 = $row['day10'];
                                    $day11 = $row['day11'];
                                    $day12 = $row['day12'];
                                    $day13 = $row['day13'];
                                    $day14 = $row['day14'];
                                    $day15 = $row['day15'];
                                    $day16 = $row['day16'];
                                    $day17 = $row['day17'];
                                    $day18 = $row['day18'];
                                    $day19 = $row['day19'];
                                    $day20 = $row['day20'];
                                    $day21 = $row['day21'];
                                    $day22 = $row['day22'];
                                    $day23 = $row['day23'];
                                    $day24 = $row['day24'];
                                    $day25 = $row['day25'];
                                    $day26 = $row['day26'];
                                    $day27 = $row['day27'];
                                    $day28 = $row['day28'];
                                    $day29 = $row['day29'];
                                    $day30 = $row['day30'];
                                    $day31 = $row['day31'];

                                    // TOTAL FORMULA
                                    $listOfDayArray = array($day01, $day02, $day03, $day04, $day05, $day06, $day07, $day08, $day09, $day10, $day11, $day12, $day13, $day14, $day15, $day16, $day17, $day18, $day19, $day20, $day21, $day22, $day23, $day24, $day25, $day25, $day27, $day28, $day29, $day30, $day31,);
                                    $countDay = 0;
                                    for ($listOfDay = 0; count($listOfDayArray) >= $listOfDay; $listOfDay++) {
                                        $countDay = $countDay + strlen($listOfDayArray[$listOfDay]);
                                    }

                                    $devideCount = floor($countDay / 3);
                                    $moduloCountDay = $countDay % 3;

                                    echo '
                                    <tr>
                                        <td>' . $lastName . ',' . $firstName . ' ' . $middleName . '</td>
                                        <td class="centered"><img src="assets/img/' . $day01 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day02 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day03 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day04 . '.png" alt="report" height="30" width="30"></td>
    
                                        <td class="centered"><img src="assets/img/' . $day05 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day06 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day07 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day08 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day09 . '.png" alt="report" height="30" width="30"></td>
                                        
                                        <td class="centered"><img src="assets/img/' . $day10 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day11 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day12 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day13 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day14 . '.png" alt="report" height="30" width="30"></td>

                                        <td class="centered"><img src="assets/img/' . $day15 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day16 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day17 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day18 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day19 . '.png" alt="report" height="30" width="30"></td>

                                        <td class="centered"><img src="assets/img/' . $day20 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day21 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day22 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day23 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day24 . '.png" alt="report" height="30" width="30"></td>

                                        <td class="centered"><img src="assets/img/' . $day25 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day26 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day27 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day28 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day29 . '.png" alt="report" height="30" width="30"></td>

                                        <td class="centered"><img src="assets/img/' . $day30 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered"><img src="assets/img/' . $day31 . '.png" alt="report" height="30" width="30"></td>
                                        <td class="centered">';
                                    if ($moduloCountDay > 0 && $devideCount != 0) {
                                        echo $devideCount . ' ';
                                        echo $moduloCountDay . '/3';
                                    } else if ($devideCount == 0) {
                                        echo $moduloCountDay . '/3';
                                    } else {
                                        echo $devideCount;
                                    }

                                    '</td>
                                    </tr>';
                                }
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="./assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="./assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="./assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/js/demo.js"></script>

<script src="script.js"></script>

</html>