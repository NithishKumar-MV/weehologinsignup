<?php
    session_start();
    $email = $_REQUEST["email"];
    $otp = rand(1111,9999);
    $conn = mysqli_connect('localhost','root','','weeho') or die('Unable To connect');
    $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='$email'");
    $count = mysqli_num_rows($result);
    $_SESSION["email"]=$email;
    $_SESSION["otp"] = $otp; 
    if($count ==0){
        
        header("Location:forget.php");
        exit();
    }else{
            $to_email = $email;
            $subject = "forget password";
            $body = "Hi, you otp is $otp";
            $headers = "From: shahid576ali@gmail.com";

            if (mail($to_email, $subject, $body, $headers)) {
                
                header("Location:otp.php");
                exit();
            } else {
                
                header("Location:forget.php");
                exit();
            }

            
    }

?>