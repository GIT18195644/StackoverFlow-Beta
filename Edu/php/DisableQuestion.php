<?php
include('./DBConnection.php'); 

$QUESTIONID = $_POST['qID'];

$sql = "UPDATE questions SET status = 'Deactivate' WHERE qestionId = '$QUESTIONID'";

if ($con->query($sql) === TRUE) {
    header("Location: ../activate-questions.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
