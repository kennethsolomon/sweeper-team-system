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
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <?php include_once './components/sidebar.php' ?>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#"> Search List </a> -->
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <?php
            //new Update
            if (isset($_GET['status'])) {
                $alreadyExist = '
                <script>
                    window.setTimeout(function() {
                        $("#alert_message").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                        }, 3000);
                </script>
                <div id="alert_message" class="alert alert-info text-center">
                    Patient Data Update Successfuly!
                </div>
                ';
                echo $alreadyExist;
            }

            if (isset($_GET['addSession'])) {
                $addSessionSuccessfully = '
                <script>
                window.setTimeout(function() {
                    $("#alert_message").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove(); 
                    });
                    }, 3000);
                </script>
                <div id="alert_message" class="alert alert-info text-center">
                    Session Added Successfully!
                </div>
                ';
                echo $addSessionSuccessfully;
            }

            if (isset($_GET['updateSession'])) {
                $addSessionSuccessfully = '
                <script>
                window.setTimeout(function() {
                    $("#alert_message").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove(); 
                    });
                    }, 3000);
                </script>
                <div id="alert_message" class="alert alert-info text-center">
                    Session Updated Successfully!
                </div>
                ';
                echo $addSessionSuccessfully;
            }
            ?>

            <!-- Display Area -->
            <div id="display_area"></div>

            <div class="content">
                <div class="container-fluid">

                    <!-- Modal -->
                    <?php include_once './modals/addSession.php' ?>
                    <?php include_once './modals/addUserModal.php' ?>
                    <?php include_once './modals/generateReports.php' ?>

                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" name="generateReportBtn" data-toggle="modal" data-target="#generateReportsModal" class="btn btn-success btn-fill pull-right mb-2">Generate Report</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 id="patientInfo" class="card-title">Edit Patient Info</h4>

                                        <!-- Patient Info -->
                                        <?php

                                        include_once 'components/patientInfo.php';
                                        ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card strpied-tabled-with-hover">
                                    <div class="card-header ">
                                        <h4 class="card-title">Patient’s Subsistence Report</h4>
                                        <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                                        <button type="submit" data-toggle="modal" data-target="#sessionModal" class="btn btn-info btn-fill pull-right">Today Session</button>
                                        <a href="action.php?uId=<?php echo $_GET['uId'] ?>&updateSession=1" type="submit" name="updateSession" class="btn btn-info btn-fill pull-right mr-2">Update</a>
                                    </div>
                                    <div class="card-body table-full-width table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Breakfast</th>
                                                    <th>Lunch</th>
                                                    <th>Dinner</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Session List -->
                                                <?php include_once './components/sessionList.php' ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php include_once './components/footer.php' ?>
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