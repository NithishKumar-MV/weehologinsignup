<?php
    session_start();
    $message="";
    $email = $_REQUEST["email"];
    $otp = rand(111111,999999);
    $conn = mysqli_connect('localhost','root','','weeho') or die('Unable To connect');
    $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='$email'");
    $count = mysqli_num_rows($result);
    $_SESSION["email"]=$email;
    if($count ==0){
        $_SESSION["message"] = "user not exist";
        header("Location:forget.php");
        exit();
    }else{
            $verify = mysqli_query($conn,"INSERT INTO `user`(`email`, `otp`) VALUES ('$email','$otp')");

            $to_email = $email;
            $subject = "forget password";
            $body = "Hi, you otp is $otp";
            $headers = "From: shahid576ali@gmail.com";

            if (mail($to_email, $subject, $body, $headers)) {
                $_SESSION["message"] = "";
                header("Location:otp.php");
                exit();

            } else {
                $_SESSION["message"] = "incorrect email id";
                header("Location:forget.php");
                exit();
            }

            
    }

?>