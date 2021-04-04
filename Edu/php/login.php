<?php      
    include('./DBConnection.php'); 

    $username = $_POST['usermail'];  
    $password = $_POST['userpwd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password); 

        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM `users` WHERE `email` = '$username' && `password` = '$password' && `authorize_status` = 'Authorized'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "Login successful";  
            
            $query = "SELECT * FROM `users` WHERE `email` = '$username' && `password` = '$password' && `authorize_status` = 'Authorized'";  

            $result = mysqli_query($con, $query);  
            while ($row = mysqli_fetch_array($result)) {
                $UserType = $row["user_role"];
                $myusername = $row["account_name"];
            }

            if ($UserType == "Administrator") {
                session_start();
                $_SESSION['login_user'] = $myusername;
                header("Location: ../index.php");
            }
            if ($UserType == "Student" || $UserType == "Instructor") {
                session_start();
                $_SESSION['login_user'] = $myusername;
                header("Location: ../user-account/index.php");
            }
        }  
        else{  
            echo "Login failed. Invalid username or password."; 
            header("Location: ../../index.html"); 
        }     
?>  