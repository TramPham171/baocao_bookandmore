<style>
	.wrapper{
		height: auto;
		width: 90%;
		margin: 0 auto;	
		border:1px solid #CCC;
	}
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"  />
<link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css" />

</head>
<?php
	include("../db_connect.php");
	
	session_start();
	$id = $_SESSION['id'];
	$capquyen = $_SESSION['capquyen'];
	$sql = "SELECT * FROM `user` WHERE id='$id' and capquyen='admin'";
	$result= mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$hoten = $row['hoten'];
			$email = $row['email'];
		}
	}
	if(!isset($_SESSION['capquyen'])){
		header("Location: ../login.php");
	}

?>

<body>
	<div class="wrapper">
    	<?php
			include("header.php");
        ?>
       
        	
<?php
	if(isset($_GET['q']) ){
		$q = $_GET['q'];
		switch($q){
			case 'qlsach':
				include("ds_sach.php");
				break;
			case 'qluser':
				include("ds_nguoidung.php");
				break;
			case 'qlcmt':
				include("ds_binhluan.php");
				break;
		}
		
	}
?>
  
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>