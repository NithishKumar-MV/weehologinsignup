<?php
    session_start();
    $message="";
    $conn = mysqli_connect('localhost','root','','weeho') or die('Unable To connect');

    $email =$_REQUEST["email"];
    $phone = $_REQUEST["phone"];


    if(isset($_REQUEST["name"])){

        if($_REQUEST["password"] != $_REQUEST["confirm_password"]){
            header("Location:login.php");
            exit();   
        }
        
        $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='$email'");
        $count = mysqli_num_rows($result);
        if($count !=0){
            $_SESSION["message"] = "user all ready exist";
            header("Location:login.php");
            exit();
        }


        $sql = "INSERT INTO `login_user`(`name`, `email`, `password`, `phone`) VALUES ('".$_REQUEST["name"]."','".$_REQUEST["email"]."','".$_REQUEST["password"]."','".$_REQUEST["phone"]."')";
        $result = mysqli_query($conn,$sql);
    }
    
        $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='" . $_REQUEST["email"] . "' and password = '". $_REQUEST["password"] . "' and phone ='". $_REQUEST["phone"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["city"] = $row['city'];
        if(isset($_SESSION["message"]))
         unset($_SESSION["message"]); 
        } else {
         $message = "Invalid Username or Password!";
         $_SESSION["message"] =$message;
         header("Location:login.php");
         exit();
        }
    if(isset($_SESSION["id"])) {
    header("Location:dashboard.php");
    exit();
    }
?>