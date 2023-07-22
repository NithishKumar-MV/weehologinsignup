<?php

    include("conn.php");
    session_start();
    
	$sql = "UPDATE `login_user` SET `img_url`=null WHERE name ='".$_SESSION['name']."'";
	mysqli_query($conn, $sql);
    header("location:profile.php");

?>