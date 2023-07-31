<?php
session_start();
$con=mysqli_connect('localhost','root','','weeho');


$input1 = $_REQUEST["input1"];
$input2 = $_REQUEST["input2"];
$input3 = $_REQUEST["input3"];
$input4 = $_REQUEST["input4"];

$otp = $input1*1000 + $input2*100 + $input3*10 + $input4;

if($_SESSION["otp"] == $otp){
    unset($_SESSION["otp"]);
    header("Location:changepass.php");
    exit();
}else{
	$_SESSION["message"] = "incorrect otp";
    header("Location:otp.php");
    exit();
}
?>