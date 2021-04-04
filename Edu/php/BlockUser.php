<?php
include('./DBConnection.php'); 

$UEMAIL = $_POST['userEmail'];
$UNIC = $_POST['userNIC'];

$sql = "UPDATE users SET authorize_status = 'Block' WHERE email = '$UEMAIL' && nic = '$UNIC'";

if ($con->query($sql) === TRUE) {
    header("Location: ../log-credentials.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
