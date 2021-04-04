<?php
include('./DBConnection.php'); 

$cname = $_POST['CategoryName'];
$cid =  $_POST['CID'];

$sql = "UPDATE category SET categoryName = '$cname' WHERE cid = '$cid'";

if ($con->query($sql) === TRUE) {
    header("Location: ../manage-category.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
