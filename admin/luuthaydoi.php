<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="3, url=thaydoi.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
	include("../db_connect.php");
	$user = $_POST['username'];
	$oldpass = md5($_POST['oldpass']);
	$newpass = md5($_POST['newpass']);
	$sql = "SELECT * FROM `user` WHERE tendangnhap = '$user' and matkhau = '$oldpass'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$upd = "UPDATE `user` SET `matkhau`='$newpass' WHERE tendangnhap = '$user';";
		$rs = mysqli_query($conn,$upd);
		if($rs)
			echo "Thay đổi thành công";
		else
			echo "Thay đổi thất bại";
	}
	
	
?>
</body>
</html>