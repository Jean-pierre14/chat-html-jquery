<?php
    include_once("./conn.php");

    $user = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $password = mysqli_real_escape_string($con, htmlentities(trim($_POST['password'])));
    $cpassword = mysqli_real_escape_string($con, htmlentities(trim($_POST['cpassword'])));

    if(!empty($user) && !empty($email) && !empty($password) && !empty($cpassword)){
        // To check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // To check the email is already exist
            $sql = mysqli_query($con, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email is already taken";
            }else{
                if(isset($_FILES['file'])){ // if file is uploaded
                    $img_name = $_FILES['file']['name']; // Getting user uploaded img name
                    $img_type = $_FILES['file']['type']; // Getting user uploaded img type
                    $tmp_name = $_FILES['file']['tmp_name']; // This temporary name id used to save/move file in our folder

                    // let's expode image and get the last extension like jpg png
                    $img_explode = explode('.', $img_name); 
                    $img_ext = end($img_explode); // // Here we get the extension of an img
                    $extension = ['png', 'jpeg', 'jpg'];
                    if(in_array($img_ext, $extension) === true){
                        $time = time(); // This will return the current time.
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "../images/".$new_img_name)){
                            $status = "Active now"; // once user regeistred hemself is active.
                            $random_id = rand(time(), 10000000); // Creating random id for user
                            
                            // Let's insert all user data
                            $sql2 = mysqli_query($con, "INSERT INTO users (unique_id, username, email, `password`, img, `status`) VALUES('{$random_id}', '{$user}', '{$email}', '{$password}',  '{$new_img_name}', '{$status}'");

                            if($sql2){
                                $sql3 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];

                                    echo "success";
                                }
                            }else{
                                echo "Something went wrong";
                            }

                        }
                    }else{
                        echo "Please select an image file - png, jpeg or jpg";
                    }

                }else{
                    echo "Please select an image file";
                }
            }
        }else{
            echo "Invalid email";
        }
    }else{
        echo "All fields are required";
    }
?>