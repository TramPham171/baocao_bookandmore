
<?php
	include("../db_connect.php");
	
	$id=$_GET['id'];
	$sql = "DELETE FROM user Where id ='$id'";
	$result = mysqli_query($conn,$sql);
	if($result)
		echo '<script>alert("Bạn đã xóa thành công")</script>'.
		 '<script>window.location="home.php?q=qluser"</script>';
	else
		echo '<script>alert("Xóa không thành công. Hãy thử lại!")</script>';
?>
