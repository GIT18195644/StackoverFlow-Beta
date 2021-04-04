<?php
include('./DBConnection.php');

$UEMAIL = $_POST['usermail'];
$PHONE = $_POST['userphone'];

$sql = "SELECT * FROM users WHERE email = '$UEMAIL' && phone = '$PHONE'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $sql = "UPDATE users SET password = 'user12345unauthorized' WHERE email = '$UEMAIL'";
    $result = mysqli_query($con, $sql);

    header("Location: ../../build-account.html");
} else {
    $ErrorMessage = "Invalid email and phone number!";
    header("Location: ../../forgot-password.php");
}

$con->close();
