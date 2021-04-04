<?php
include('./DBConnection.php'); 

$uid = $_POST['UID'];
$subject = $_POST['Subject'];
$bodymsg = $_POST['bodymsg'];
$category = $_POST['cty'];

$sql = "INSERT INTO questions(subject, question, authorId, categoryId) VALUES ('$subject', '$bodymsg', '$uid', '$category')";

if ($con->query($sql) === TRUE) {
    header("Location: ../user-account/index.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
