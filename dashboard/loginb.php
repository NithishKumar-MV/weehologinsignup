<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $conn = mysqli_connect('localhost','root','','weeho') or die('Unable To connect');
        $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
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
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:dashboard.php");
    }
?>