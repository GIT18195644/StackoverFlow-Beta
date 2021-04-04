<?php
include('./DBConnection.php'); 

$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$utype = $_POST['utype'];
$uphone = $_POST['uphone'];
$unic = $_POST['unic'];
$usex = $_POST['usex'];
$ubod = $_POST['ubod'];
$uage = $_POST['uage'];
$uzip = $_POST['uzip'];


$sql = "INSERT INTO users(account_name, email, user_role, phone, nic, gender, birthday, age, postal_code) VALUES ('$uname', '$uemail', '$utype', '$uphone', '$unic', '$usex', '$ubod', '$uage', '$uzip')";

if ($con->query($sql) === TRUE) {
    header("Location: ../../subscribe-pending.html");
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();
