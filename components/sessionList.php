<?php

//View Patient Info
$pId = $_GET['uId'];
$query = "SELECT * FROM patientsubsistence WHERE pId = '$pId' ORDER BY date DESC";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo '
        <tr>
            <td>' . $row['date'] . '</td>
            <td>' . $row['breakfast'] . '</td>
            <td>' . $row['lunch'] . '</td>
            <td>' . $row['dinner'] . '</td>
            <td>' . $row['npo'] . '</td>
            <td>' . $row['gl'] . '</td>
            <td>
            <a id="deleteSessionBtn" class="btn btn-sm btn-danger btn-fill" href="action.php?uId=' . $_GET['uId'] . '&id=' . $id . '&deleteSession=1">Delete</a>
            </td>
        </tr>
';
    }
}
