
<?php
	include("../db_connect.php");
	
	$idsach=$_GET['id'];
	$sql = "DELETE FROM `sach` Where idsach ='$idsach'";
	$result = mysqli_query($conn,$sql);
	if($result)
		echo '<script>alert("Bạn đã xóa thành công")</script>'.
		 '<script>window.location="home.php?q=qlsach"</script>';
	else
		echo '<script>alert("Xóa không thành công. Hãy thử lại!")</script>';
?>
