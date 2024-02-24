

<?php
	include("../db_connect.php");
	
	$idcmt=$_GET['id'];
	$sql = "DELETE FROM `binhluan` Where idcmt ='$idcmt'";
	$result = mysqli_query($conn,$sql);
	if($result)
		echo '<script>alert("Bạn đã xóa thành công")</script>'.
		 '<script>window.location="home.php?q=qlcmt"</script>';
	else
		echo '<script>alert("Xóa không thành công. Hãy thử lại!")</script>';
?>
