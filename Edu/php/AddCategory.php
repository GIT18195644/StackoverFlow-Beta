<?php
include('./DBConnection.php'); 

$cname = $_POST['CategoryName'];


$sql = "INSERT INTO category(categoryName) VALUES ('$cname')";

if ($con->query($sql) === TRUE) {
    header("Location: ../manage-category.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
