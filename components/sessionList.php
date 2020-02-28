<?php

//View Patient Info
$pId = $_GET['uId'];
$query = "SELECT * FROM patientsubsistence WHERE pId = '$pId' ORDER BY date DESC";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <tr>
            <td>' . $row['date'] . '</td>
            <td>' . $row['breakfast'] . '</td>
            <td>' . $row['lunch'] . '</td>
            <td>' . $row['dinner'] . '</td>
        </tr>
';
    }
}
