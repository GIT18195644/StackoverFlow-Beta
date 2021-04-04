<?php
include('./DBConnection.php'); 

$UID =  $_POST['UserID'];

$sql = "DELETE FROM answers WHERE authorId = '$UID'";

if ($con->query($sql) === TRUE) {
    header("Location: ../user-account/clear-account.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
