<?php
include('./DBConnection.php'); 

$IssueID =  $_POST['IssueID'];
$UID =  $_POST['UID'];

$sql = "DELETE FROM issues WHERE issue_id = '$IssueID' && user_id = '$UID'";

if ($con->query($sql) === TRUE) {
    header("Location: ../user-account/my-issues.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
