<?php
	include("db_connect.php");
	$username = $password ='';
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM user WHERE  tendangnhap='$username' and matkhau='$password' and capquyen ='admin'";
	//echo $sql; 
	
	//echo $sql1; 
	$result = mysqli_query($conn,$sql);
	
	//$sq = mysqli_num_rows($result);
	//$sq1 = mysqli_num_rows($result1);
	if(mysqli_num_rows($result)> 0 )
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$id = $row['id'];
			$username = $row['tendangnhap'];
			$cq = $row['capquyen'];
			$hoten = $row['hoten'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['user_ad'] = $username;
			$_SESSION['hoten'] = $hoten;
			$_SESSION['capquyen'] = $cq;
		}
		header("Location: admin/home.php");
	}
	else{
	
		echo '<script language="javascript">alert("Sai mật khẩu hoặc email");</script>';

	}
$sql1="SELECT * FROM user WHERE tendangnhap='$username' AND matkhau='$password' AND capquyen =''";
$result1 = mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result1)> 0 )
	{
		while($row1 = mysqli_fetch_assoc($result1))
		{
			$id = $row1['id'];
			$user = $row1['tendangnhap'];
			$hoten = $row1['hoten'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['user'] = $user;
			$_SESSION['hoten'] = $hoten;
			$_SESSION['last_login'] = time();
			$_SESSION['expire'] = $_SESSION['last_login'] + (60*60*6);
		}
	         
		header("Location: trangchu.php");
		
	}
	else{
	
		echo '<script language="javascript">alert("Sai mật khẩu hoặc email");</script>';
	}
?>