<?php
    include_once "./config.php";
    
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $password = mysqli_real_escape_string($con, htmlentities(trim($_POST['password'])));
    $action = mysqli_real_escape_string($con, htmlentities(trim($_POST['action'])));

    if(!empty($password) && !empty($email)){
        $pass = md5($password);
        $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}' AND `password` = '{$pass}'");
        if(@mysqli_num_rows($sql) == 1){
            $row = mysqli_fetch_array($sql);
            session_start();
            $_SESSION['unique_id'] = $row['unique_id'];
            print 'success';
        }else{
            print "This account doesn't exist";
        }
    }else{
        print "Email or password invalid";
    }
    
?>