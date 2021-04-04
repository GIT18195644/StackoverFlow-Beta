<?php
include('./DBConnection.php'); 

$cid =  $_POST['CID'];

$sql = "DELETE FROM category WHERE cid = '$cid'";

if ($con->query($sql) === TRUE) {
    header("Location: ../manage-category.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
