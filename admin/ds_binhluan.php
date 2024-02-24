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
	
		
	$sql = "SELECT * FROM binhluan";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0)
	{
		echo "Không có dữ liệu";
	}
	else
	{
?>

<h1 align="center" >DANH SÁCH BÌNH LUẬN</h1>
<table class="table table-striped">
  	
    <tr>
      <th scope="col">ID CMT</th>
      <th scope="col">HỌ TÊN</th>
      <th scope="col">TÊN ĐĂNG NHẬP</th>
      <th scope="col">ID USER</th>
      <th scope="col">ID SÁCH</th>
      <th scope="col">NỘI DUNG BÌNH LUẬN</th>
      <th scope="col">NGÀY BÌNH LUẬN</th>
      <th scope="col">XÓA</th>
    </tr>
 
  
  <?php
  	while($row = mysqli_fetch_array($result))
	{
  ?>
         
	
    <tr>
      <th><?=$row['idcmt']?></th>
      <td><?=$row['hoten']?></td>
      <td><?=$row['user']?></td>
      <td><?=$row['id']?></td>
      <td><?=$row['idsach']?></td>
      <td><?=$row['noidungbl']?></td>
      <td><?=$row['ngaybl']?></td>
      <td><a href="xoabinhluan.php?id=<?=$row['idcmt']?>" onclick="return Thongbao();"><i class="fa-solid fa-trash"></i>
</a></td>
    </tr>
  
    
   <?php
   		
	}
   ?>       
</table>
<?php
	}
?>
