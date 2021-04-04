<?php
include('./DBConnection.php'); 

$uid = $_POST['uid'];
$upwd2 = $_POST['upwd2'];


$sql = "UPDATE users SET password = '$upwd2' WHERE user_id = '$uid'";

if ($con->query($sql) === TRUE) {
    header("Location: ./logout.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
