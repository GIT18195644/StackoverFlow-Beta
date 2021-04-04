<?php
include('./DBConnection.php');

$password = $_POST['pwd'];
$uid =  $_POST['UID'];

$query = "SELECT password FROM users WHERE user_id = '$uid'";
$res = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($res)) {
    $pwd = $row['password'];
}

if ($pwd == $password) {
    $sql = "UPDATE users SET authorize_status = 'Deleted' WHERE user_id = '$uid' && password = '$password'";
    if ($con->query($sql) === TRUE) {
    header("Location: ./logout.php");
    }
} else {
    header("Location: ../user-account/clear-account.php");
}

$con->close();
