<?php include_once "./config/config.php";
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("Location: login.php");
    }else{
        $Id = $_SESSION['unique_id'];
        $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = $Id");
        if(@mysqli_num_rows($sql) == 1){
            $row = mysqli_fetch_array($sql);
        }else{
            header("Location: login.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/58594917?v=4" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <link rel="stylesheet" href="./css/progress.css">
    <style>
    .img-avatar {
        position: relative;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
    }
    </style>
</head>