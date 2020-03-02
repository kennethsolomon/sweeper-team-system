<?php

//View Patient Info
$pId = $_GET['uId'];
$query = "SELECT * FROM patient WHERE uId = '$pId'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
<div class="card-body" id="patientInfo">
    <form method="post" action="action.php">
        <div class="row">
            <input type="hidden" class="form-control" name="pId" id="pId" value="' . $row['uId'] . '" required>
            <div class="col-md-4 pr-1">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName" value="' . $row['lastName'] . '" required>
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName" value="' . $row['firstName'] . '" required>
                </div>
            </div>
            <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" placeholder="Middle Name" name="middleName" id="middleName" value="' . $row['middleName'] . '" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label>Ward</label>
                    <select id="ward" name="ward" class="form-control" required>
                        <option value="' . $row['ward'] . '">' . $row['ward'] . '</option>
                        <option value="General">General</option>
                        <option value="Pedia/Surgery">Pedia/Surgery</option>
                        <option value="OB">OB</option>
                        <option value="Rehy/ISO">Rehy/ISO</option>
                    </select>
                </div>
            </div>
            <div class="col-md-8 pr-1">
                <div class="form-group">
                </div>
            </div>
            
        </div>

        <button type="submit" name="updatePatientBtn" class="btn btn-info btn-fill pull-right ml-3">Update Patient Info</button>
        <div class="clearfix"></div>
    </form>
</div>
';
    }
}
