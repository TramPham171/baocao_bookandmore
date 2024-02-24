<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
</head>

<body>
<?php
	include("../db_connect.php");
	
	$tensach = $_POST['tensach'];
	$loaisach = $_POST['loaisach'];
	$tacgia = $_POST['tacgia'];
	$nam = $_POST['nxb'];
	$tinhtrang = $_POST['tinhtrang'];
	$tomtat = $_POST['tomtat'];
	$nd = $_POST['noidung'];
	$hinhanh = $_FILES["img"];
	if($hinhanh["error"] != 0)
	{
		echo "Dữ liệu upload bị lỗi";
		die;	
	}
	$path = "../img/";
	$target_file = $path . basename($hinhanh["name"]);
	$allow = true;
	$maxsize = 1000000;	//1MB
	$allowType = array('JPG', 'GIF' , 'PNG', 'JPEG');
	if(file_exists($target_file))
	{
		echo "Tập tin này đã tồn tại";
		$allow = false;
	}
	if($hinhanh["size"] > $maxsize)
	{
		echo "Tập tin có dung lượng lớn hơn cho phép (1MB)";
		$allow = false;	
	}
	$filetype = strtoupper(pathinfo($target_file,PATHINFO_EXTENSION));
	if(!in_array($filetype,$allowType))
	{
		echo "Không hỗ trợ định dạng này";
		$allow = false;
	}
	if($allow)
	{
		
			$sql = "INSERT INTO `sach`(`idsach`, `tensach`, `loaisach`, `tacgia`, `namxb`, `img`, `tinhtrang`, `tomtat`, `noidung`) VALUES('','$tensach','$loaisach','$tacgia','$nam','".$hinhanh['name']."','.$tinhtrang', '$tomtat','$nd')";
			$rs = mysqli_query($conn, $sql);
			if($rs){
				move_uploaded_file($hinhanh["tmp_name"],$target_file);
				echo '<script>alert("Bạn đã thêm thành công")</script>'.'<script>window.location="../admin/home.php?q=qlsach"</script>';
				//header('Location: ../admin/home.php?q=qlsach');
			}else{
				echo '<script>alert("Bạn đã thêm thất bại")</script>';
			}	
		
		
	}
	
?>
</body>
</html>