<style>
	h1{
		margin:20px 0;	
	}
	tr{
		text-align:center;	
	}
</style>
<script language="javascript">
	function Thongbao(){
		return confirm("Bạn có chắc muốn xóa?");
	}
</script>


<?php
	include("../db_connect.php");
	
		
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0)
	{
		echo "Không có dữ liệu";
	}
	else
	{
?>

<h1 align="center" >DANH SÁCH NGƯỜI DÙNG</h1>
<table class="table table-striped">
  	
    <tr>
      <th scope="col">ID</th>
      <th scope="col">HỌ TÊN</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TÊN ĐĂNG NHẬP</th>
      <th scope="col">MẬT KHẨU</th>
      <th scope="col">CẤP QUYỀN</th>
      <th scope="col">XÓA</th>
    </tr>
 
  
  <?php
  	while($row = mysqli_fetch_array($result))
	{
  ?>
         
	
    <tr>
      <th><?=$row['id']?></th>
      <td><?=$row['hoten']?></td>
      <td><?=$row['email']?></td>
      <td><?=$row['tendangnhap']?></td>
      <td><?=$row['matkhau']?></td>
      <td><?=$row['capquyen']?></td>
      <td><a href="xoanguoidung.php?id=<?=$row['id']?>" onclick="return Thongbao();"><i class="fa-solid fa-trash"></i>
</a></td>
    </tr>
  
    
   <?php
   		
	}
   ?>       
</table>
<?php
	}
?>
