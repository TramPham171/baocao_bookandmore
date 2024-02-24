<style>
	*{
		font-family:Tahoma, Geneva, sans-serif;	
	}
	p{
		text-transform:uppercase;	
	}
	a{
		text-decoration:none;
		font-size:18px;	
	}
	a:hover{
		text-decoration:underline;
		font-size:20px;	
	}
	.item{
		border:1px solid #CCC;
		margin-bottom:20px;	
		padding:10px;
		
	}
	h4{
		color:#1123FF;	
	}
	.ngay{
		float:right;
		font-size:14px;	
	}
	textarea{
		width:100%;	
	}
	#name{
		border:0px;	
	}
	#button{
		border:0px;
		background-color:#36F;
		font-size:18px;
		color:#fff;
		margin-top:5px;
		padding:5px 7px;
		cursor:pointer;
	}
	
</style>
<?php
	session_start();
	include("./db_connect.php");
	if(isset($_SESSION['id'])&&($_SESSION['id']>0)){ //kiểm tra tồn tại iduser không
		if(isset($_SESSION['user'])&&($_SESSION['user']!="")){
			$user = $_SESSION['user'];
			$hoten = $_SESSION['hoten'];
			
		}
		else{
			$user = "";	
			$hoten = "";
		}
		
		if(isset($_POST['dangbl'])&&($_POST['dangbl'])){
			$name = $_POST['name'];
			$tenuser = $_POST['user'];
			$idsach = $_POST['idsach'];
			$noidungcmt = $_POST['noidung'];
			$iduser = $_SESSION['id'];
			
			$sql = "INSERT INTO `binhluan`(`idcmt`, `hoten`, `user`, `id`, `idsach`, `noidungbl`,`ngaybl`) VALUES ('','$name','$tenuser','$iduser','$idsach','$noidungcmt',now())";
			$rs = mysqli_query($conn,$sql);
			
		}
		
		
?>

<div class="mb-3">
<p>Bình luận</p>
     <form id="form1" name="form1" method="post" action="">
     	
     	  <input type="text" name="name" id="name" value="<?=$hoten?>" />
     	
     	<input type="hidden" name="user" value="<?=$user?>" />
        <input type="hidden" name="idsach" value="<?=$_GET['idsach']?>" />
   		<textarea name="noidung" id="txtcmt" cols="100" rows="7"></textarea>
   		<input type="submit" name="dangbl" id="button" value="Đăng" />
<?php
	}else{
		echo '<a href="login.php" target="_parent">Bạn cần đăng nhập để bình luận</a>';
	}
?>
  </form>
     <h2>Tất cả bình luận</h2>
     <?php
	 $id1 = $_GET['idsach'];
	 	$sql1 = "SELECT * FROM `binhluan` where idsach = '$id1'";
		$rs1 = mysqli_query($conn,$sql1);
			 while($row = mysqli_fetch_array($rs1)){
	 ?>
     	<div class="item">
        	<h4><?php echo $row['hoten'] ?> </h4>
            <div class="nd">
                <span class="noidung"><?php echo $row['noidungbl'] ?></span>
                <span class="ngay"><?php echo $row['ngaybl'] ?></span>
            </div>
        </div>
     <?php
			 }
	 ?>
</div>

