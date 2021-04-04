<?php
include('./DBConnection.php'); 

$UNAME = $_POST['fullname'];
$UEMAIL = $_POST['uEmail'];
$UNIC = $_POST['nic'];
$UPCODE = $_POST['pcode'];
$UPHONE = $_POST['Phone'];
$USEX = $_POST['sex'];
$UBOD = $_POST['bday'];
$UAGE = $_POST['Age'];
$U_ID = $_POST['uid'];

$sql = "UPDATE users SET account_name = '$UNAME', email = '$UEMAIL', nic = '$UNIC', postal_code = '$UPCODE', phone = '$UPHONE', gender = '$USEX', birthday = '$UBOD', age = '$UAGE' WHERE user_id = '$U_ID'";

if ($con->query($sql) === TRUE) {
    header("Location: ./logout.php");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
