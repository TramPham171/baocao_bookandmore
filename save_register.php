<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="3, url=register.php" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("../doan/db_connect.php");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$sql = "SELECT * FROM `user` WHERE email = '". $email ."' or tendangnhap = '". $username ."'";
	$rs = mysqli_query($conn,$sql);
	if(mysqli_num_rows($rs)>0)
		echo '<script language="javascript">alert("Email hoặc tên đăng nhập đã tồn tại, vui lòng nhập lại");</script>';
	else{
		$sql1 = "INSERT INTO `user`(`id`,`hoten`, `email`, `tendangnhap`, `matkhau`) VALUES ('','$name','$email','$username','$password')"; 
		$result = mysqli_query($conn, $sql1);
		if($result)
			echo "Bạn đăng ký thành công";
		else
			echo "Bạn đăng ký thất bại";
	}
?>

</body>
</html>