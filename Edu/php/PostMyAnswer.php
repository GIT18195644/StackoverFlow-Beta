<?php
include('./DBConnection.php'); 

$questionid = $_POST['QID'];
$uid = $_POST['UID'];
$answer = $_POST['UserAnswer'];


$sql = "INSERT INTO answers(answer, questionId, authorId) VALUES ('$answer', '$questionid', '$uid')";

if ($con->query($sql) === TRUE) {
    header("Location: ../user-account/index.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
