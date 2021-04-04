<?php
include('./DBConnection.php'); 

$QUESTIONID = $_POST['qID'];

$sql = "UPDATE questions SET status = 'Activate' WHERE qestionId = '$QUESTIONID'";

if ($con->query($sql) === TRUE) {
    header("Location: ../deactivate-questions.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
