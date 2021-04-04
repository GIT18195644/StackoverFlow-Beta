<?php
include('./DBConnection.php'); 

$uid = $_POST['UID'];
$subject = $_POST['SubjectIssue'];
$bodymsg = $_POST['IssueTextarea'];

$sql = "INSERT INTO issues(issue, issue_message, user_id) VALUES ('$subject', '$bodymsg', '$uid')";

if ($con->query($sql) === TRUE) {
    header("Location: ../user-account/my-issues.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
