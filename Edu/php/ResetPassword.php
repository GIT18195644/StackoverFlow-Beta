<?php
include('./DBConnection.php'); 

$UEMAIL = $_POST['userEmail'];
$UPASSWORD = $_POST['userpwd'];

$sql = "UPDATE users SET password = '$UPASSWORD' WHERE email = '$UEMAIL'";

if ($con->query($sql) === TRUE) {
    header("Location: ../log-credentials.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
