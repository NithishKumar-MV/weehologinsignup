<?php
session_start();
$con=mysqli_connect('localhost','root','','weeho');
$otp=$_REQUEST['otp'];
$email=$_SESSION["email"];
$res=mysqli_query($con,"select * from user where email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
	mysqli_query($con,"update user set otp='' where email='$email'");
	$_SESSION["message"] = "";
    header("Location:changepass.php");
    exit();
}else{
	$_SESSION["message"] = "incorrect otp";
    header("Location:otp.php");
    exit();
}
?>