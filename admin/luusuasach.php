<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include("../db_connect.php");
	$idold = $_GET['id'];
	$tensach = $_POST['tensach'];
	$loaisach = $_POST['loaisach'];
	$tacgia = $_POST['tacgia'];
	$namxb = $_POST['namxb'];	
	$tinhtrang = $_POST['tinhtrang'];
	$tomtat = $_POST['tomtat'];
	$noidung = $_POST['noidung'];	
	
	$sql = "UPDATE sach SET `tensach`='$tensach',`loaisach`='$loaisach',`tacgia`='$tacgia',`namxb`='$namxb',`tinhtrang`='$tinhtrang',`tomtat`='$tomtat',`noidung`='$noidung' WHERE idsach = '$idold'";
	
	$result = mysqli_query($conn,$sql);
	if($result)
		echo '<script>alert("Bạn đã cập nhật thành công")</script>'.
		 '<script>window.location="home.php?q=qlsach"</script>';
	else
		echo '<script>alert("Cập nhật không thành công. Hãy thử lại!")</script>';
	
?>	
</body>
</html>