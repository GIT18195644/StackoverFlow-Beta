<?php
include('./DBConnection.php'); 

$UEMAIL = $_POST['useremail']; 

$sql = "UPDATE users SET authorize_status = 'Authorized' WHERE email = '$UEMAIL'";

if ($con->query($sql) === TRUE) {
    header("Location: ../subscribers-management.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
