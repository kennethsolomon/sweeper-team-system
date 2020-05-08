<?php

//View Patient Info
$pId = $_GET['id'];
$query = "SELECT * FROM patient WHERE id = '$pId'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
<div class="card-body" id="patientInfo">
    <form method="post" action="action.php">
        <div class="row">
            <input type="hidden" class="form-control" name="pId" id="pId" value="' . $row['id'] . '" required>
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
            <div class="col-md-4 px-1">
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" placeholder="Middle Name" name="middleName" id="middleName" value="' . $row['middleName'] . '" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 pr-1">
                <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" class="form-control" placeholder="Birthday" name="birthday" id="birthday" value="' . $row['birthday'] . '" required>
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" placeholder="Age" name="age" id="age" value="' . $row['age'] . '" required>
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="form-group">
                <label>Sex</label>
                    <select id="sex" class="form-control" name="sex">
                        <option value="' . $row['sex'] . '">' . $row['sex'] . '</option>
                        <option value=""></option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pr-1">
                <div class="form-group">
                    <label>Origin</label>
                    <input type="text" class="form-control" placeholder="Origin" name="origin" id="origin" value="' . $row['origin'] . '" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pr-1">
                <div class="form-group">
                    <label>Barangay</label>
                    <input type="text" class="form-control" placeholder="Barangay" name="barangay" id="barangay" value="' . $row['barangay'] . '" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pr-1">
                <div class="form-group">
                    <label>Municipality</label>
                    <select id="municipality" name="municipality" class="form-control" value="' . $row['municipality'] . '">
                        <option value="' . $row['municipality'] . '">' . $row['municipality'] . '</option>
                        <option value=""></option>
                        <option value="Sorsogon City">Sorsogon City</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Bulan">Bulan</option>
                        <option value="Bulusan">Bulusan</option>
                        <option value="Casiguran">Casiguran</option>
                        <option value="Castilla">Castilla</option>
                        <option value="Donsol">Donsol</option>
                        <option value="Gubat">Gubat</option>
                        <option value="Irosin">Irosin</option>
                        <option value="Juban">Juban</option>
                        <option value="Magallanes">Magallanes</option>
                        <option value="Matnog">Matnog</option>
                        <option value="Pilar">Pilar</option>
                        <option value="Prieto Diaz">Prieto Diaz</option>
                        <option value="Sta. Magdalena">Sta. Magdalena</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pr-1">
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" placeholder="Contact Number" name="contactNumber" id="contactNumber" value="' . $row['contactNumber'] . '" required>
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
