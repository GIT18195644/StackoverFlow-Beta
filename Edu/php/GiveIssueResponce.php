<?php
include('./DBConnection.php'); 

$ISSUEID = $_POST['ISID'];

$sql = "UPDATE issues SET status = 'Deactive' WHERE issue_id = '$ISSUEID'";

if ($con->query($sql) === TRUE) {
    header("Location: ../index.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
