<?php
include('./DBConnection.php'); 

$USERID = $_POST['uid'];
$CORRECTPW = $_POST['userpwdtrue'];
$UCURRENTPW = $_POST['currentuserpwd'];
$NEWPW = $_POST['newuserpwd'];
$CONFIRMPW = $_POST['confirmuserpwd'];

if($CORRECTPW == $UCURRENTPW) {
    if ($CORRECTPW != $NEWPW && $CORRECTPW != $CONFIRMPW) {
        if ($NEWPW == $CONFIRMPW) {
            $sql = "UPDATE users SET password = '$CONFIRMPW' WHERE user_id = '$USERID'";

            if ($con->query($sql) === TRUE) {
                header("Location: ./logout.php");
            } else {
              echo "Error updating record: " . $con->error;
            }
        }
        else {
            echo "New password and Confirm Password mismatch";
        }
    }
    else {
        echo "New password or Confirm Password cannot be same old password";
    }
}
else {
    echo "your current password is invalid. Try again";
}

$con->close();
