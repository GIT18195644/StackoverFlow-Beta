<?php
include('./DBConnection.php'); 

$UID =  $_POST['UserID'];

$sql = "DELETE FROM issues WHERE user_id = '$UID'";

if ($con->query($sql) === TRUE) {
    header("Location: ../user-account/clear-account.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
