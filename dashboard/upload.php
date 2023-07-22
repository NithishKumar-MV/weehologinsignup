<?php
    include("conn.php");
    session_start();
    echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);
	$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
	$img_upload_path = 'images/'.$new_img_name;
	move_uploaded_file($tmp_name, $img_upload_path);
	$sql = "UPDATE `login_user` SET `img_url`='$new_img_name' WHERE name ='".$_SESSION['name']."'";
	mysqli_query($conn, $sql);
    header("location:profile.php");

?>