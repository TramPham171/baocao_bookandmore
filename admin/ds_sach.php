<style>
	h1{
		margin:15px 0;	
	}
	tr{
		text-align:center;	
	}
	th#id{
		line-height:6.4;	
	}
	td{
		line-height:6.4;	
	}
	td a i{
		padding-top:40px;	
	}
	#themsach{
		font-size:24px;
		padding:10px 50px;
		margin:30px;
		background-color:#999;
		border:0;
		box-shadow:0.2em 0.2em 0.5em #000000;
	}
	#themsach a{
		text-decoration:none;
		color:#fff;			
	}
	#themsach a:hover{
		color:#F00;
		font-size:25px;	
	}
</style>
<script language="javascript">
	function Thongbao(){
		return confirm("Bạn có chắc muốn xóa?");
	}
</script>


<?php
	include("../db_connect.php");
	
		
	$sql = "SELECT * FROM sach";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0)
	{
		echo "Không có dữ liệu";
	}
	else
	{
?>

<h1 align="center" >DANH SÁCH SÁCH</h1>
<button type="button" id="themsach"><a href="../upload/themsach.php"><i class="fa-solid fa-plus"></i> Thêm sách</a></button>
<table class="table table-striped">
  	
    <tr>
      <th scope="col" >ID</th>
      <th scope="col">TÊN SÁCH</th>
      <th scope="col">THỂ LOẠI</th>
      <th scope="col">TÁC GIẢ</th>
      <th scope="col">NĂM XUẤT BẢN</th>
      <th scope="col">HÌNH ẢNH</th>
      <th scope="col">TÌNH TRẠNG</th>
      <th scope="col">SỬA</th>
      <th scope="col">XÓA</th>
    </tr>
 
  
  <?php
  	while($row = mysqli_fetch_array($result))
	{
  ?>
         
	
    <tr>
      <th id="id"><?=$row['idsach']?></th>
      <td><?=$row['tensach']?></td>
      <td><?=$row['loaisach']?></td>
      <td><?=$row['tacgia']?></td>
      <td><?=$row['namxb']?></td>
      <td><img src="../img/<?php echo $row["img"] ?>" width="70" height="100"/></td>
      <td><?=$row['tinhtrang']?></td>
	  <td><a href="suasach.php?id=<?=$row['idsach']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href="xoasach.php?id=<?=$row['idsach']?>" onclick="return Thongbao();"><i class="fa-solid fa-trash"></i>
</a></td>
    </tr>
  
    
   <?php
   		
	}
   ?>       
</table>
<?php
	}
?>
