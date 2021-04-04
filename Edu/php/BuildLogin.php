<?php
include('./DBConnection.php');

$username = $_POST['usermail'];
$nic = $_POST['usernic'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$nic = stripcslashes($nic);

$username = mysqli_real_escape_string($con, $username);
$nic = mysqli_real_escape_string($con, $nic);

$sql = "SELECT * FROM users WHERE email = '$username' && nic = '$nic' && `authorize_status` = 'Authorized'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "Login successful";

    $query = "SELECT * FROM users WHERE email = '$username' && nic = '$nic' && `authorize_status` = 'Authorized'";

    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $myusername = $row["account_name"];
    }

    session_start();
    $_SESSION['login_user'] = $myusername;
    header("Location: ../../authorize-my-account.php");
} else {
    echo "Login failed. Invalid username or password." . $count;
    header("Location: ../../build-account.html");
}
