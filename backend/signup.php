<?php
    include_once("./conn.php");

    $user = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $password = mysqli_real_escape_string($con, htmlentities(trim($_POST['password'])));
    $cpassword = mysqli_real_escape_string($con, htmlentities(trim($_POST['cpassword'])));

    if(!empty($user) && !empty($email) && !empty($password) && !empty($cpassword)){

    }else{
        echo "All fields are required";
    }
?>