<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT * FROM `users` WHERE `account_name` = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $l_s_ID = $row['user_id'];
   $l_s_ACCOUNT = $row['account_name'];
   $l_s_PHONE = $row['phone'];
   $l_s_GENDER = $row['gender'];
   $l_s_NIC = $row['nic'];
   $l_s_EMAIL = $row['email'];
   $l_s_BDAY = $row['birthday'];
   $l_s_AGE = $row['age'];
   $l_s_PCODE = $row['postal_code'];
   $l_s_STATUS = $row['authorize_status'];
   $l_s_ROLE = $row['user_role'];
   $l_s_PASSWORD = $row['password'];
   $l_s_REGDATE = $row['subscription_date'];


   date_default_timezone_set("Asia/Colombo");
   $last_login_time = date("Y-m-d")." ".date("l")." ".date("h:i:sa");
   
   if(!isset($_SESSION['login_user'])){
      header("location: ../../index.html");
      die();
   }
