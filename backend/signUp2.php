<?php
    print "success";
    include_once("./conn.php");

    $user = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $password = mysqli_real_escape_string($con, htmlentities(trim($_POST['password'])));
    $cpassword = mysqli_real_escape_string($con, htmlentities(trim($_POST['cpassword'])));

    

    if(!empty($user) && !empty($email) && !empty($password) && !empty($cpassword)){
        $pass = md5($password);
        $status = 'Active now';
        $random_id = rand(time(), 1000000);

        if(isset($_FILES['file'])){
            $img_name = $_FILES['file']['name']; // Getting user uploaded img name
            $img_type = $_FILES['file']['type']; // Getting user uploaded img type
            $tmp_name = $_FILES['file']['tmp_name']; // This temporary name id used to save/move file in our folder
            
            // let's expode image and get the last extension like jpg png
            $img_explode = explode('.', $img_name); 
            $img_ext = end($img_explode); // // Here we get the extension of an img
            $extension = ['png', 'jpeg', 'jpg', 'JPG'];

            if(in_array($img_ext, $extension) === true){
                $time = time(); // This will return the current time.
                $new_img_name = $time.$img_name;

                if(move_uploaded_file($tmp_name, "../images/".$new_img_name)){
                    $sqlRes = mysqli_query($con, "INSERT INTO users (unique_id, username, email, `password`, img, `status`) VALUES('{$random_id}', '{$username}', '{$email}', '{$pass}', '{$new_name}', '{$status}')");
                    if($sqlRes){
                        print "success";
                    }else{
                        print "Sql error";
                    }
                }

            }else{
                print "You can select only image of this type: -png, - jpg, jpeg";
            }

        }else{
            print "Select an image please";
        }
        
    }else{
        print 'All fileds are required';
    }


?>