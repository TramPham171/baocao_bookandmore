<style>
	body{
		background-image:url(../img/backad.jpg);	
		background-repeat:no-repeat;
		background-size:cover;
		
		background-attachment:scroll;
	}
	h1{
		margin: 20px;
	}
	table {
		margin-left: 100px;
		border: 1px;
		font: message-box;
		font-weight: bold;
		background:rgba(0,0,0,0.8)	;
		box-shadow:0px 0px 17px #FFF;
		color: honeydew;
		opacity: 1;
	}
	td {
		padding: 5px 15px;
	}
	#button {
		font-size: x-large;
		padding: 5px 10px;
		background-color: chartreuse;
		border: 0;
		margin: 15px;
		border-radius: 60px;
		width: 200px;
		cursor: pointer;
		height:45px;
	}
	input{
		border-radius:5px;
		height:30px;	
	}
	#form1 a i:hover{
		color:#F33 !important;
	}
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css" />

<script src="../ckeditor/ckeditor.js"></script>


</head>

<body>
<?php
	include("../db_connect.php");
	$idsach = $_GET['id'];
	
	$sql = "Select * from sach Where idsach='$idsach'";
	$rs = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_array($rs);
	
?>
<form id="form1" name="form1" method="post" action="luusuasach.php?id=<?=$row['idsach']?>">
  <table width="1298" border="0">
  
    <tr>
    
      <td colspan="2">
      <a href="home.php?q=qlsach"><i class="fa-sharp fa-solid fa-square-xmark" style="color:white;float:right;font-size:24px;"></i></a>
      <div align="center">  <h1>CẬP NHẬT SÁCH</h1>
        
      </div></td>
    </tr>
    <tr>
      <td width="111" >ID</td>
      <td width="1171"><label for="id"></label>
      <input name="id" type="text" disabled="disabled" id="id" value="<?=$row['idsach']?>"/></td>
    </tr>
    <tr>
      <td>Tên sách</td>
      <td><label for="tensach"></label>
      <input name="tensach" type="text" id="tensach" size="70" value="<?=$row['tensach']?>"/></td>
    </tr>
    <tr>
      <td >Loại sách</td>
      <td><label for="loaisach"></label>
      <input name="loaisach" type="text" id="loaisach" size="50" value="<?=$row['loaisach']?>"/></td>
    </tr>
    <tr>
      <td>Tác giả</td>
      <td><label for="tacgia"></label>
      <input name="tacgia" type="text" id="tacgia" size="50" value="<?=$row['tacgia']?>"/></td>
    </tr>
    <tr>
      <td>Năm xuất bản</td>
      <td><label for="namxb"></label>
      <input type="text" name="namxb" id="namxb" value="<?=$row['namxb']?>"/></td>
    </tr>
    <tr>
      <td>Tình trạng</td>
      <td><label for="tinhtrang"></label>
      <input name="tinhtrang" type="text" id="tinhtrang" size="40" value="<?=$row['tinhtrang']?>"/></td>
    </tr>
    <tr>
      <td>Tóm tắt</td>
      <td><label for="tomtat"></label>
      <textarea name="tomtat" id="tomtat" cols="100" rows="5" value="<?=$row['tomtat']?>"></textarea></td>
      
    </tr>
    <tr>
      <td>Nội dung</td>
      <td><label for="noidung"></label>
      <textarea name="noidung" cols="150" rows="10" id="noidung" value="<?=$row['noidung']?>"></textarea></td>
      
    </tr>
    <tr>
      <td colspan="2">
        <p align="center">
          <input type="submit" name="Submit" id="button" value="Cập nhật" />
        </p>
      </td>
    </tr>
  </table>
</form>
<script>CKEDITOR.replace('tomtat');</script>
<script>CKEDITOR.replace('noidung');</script>
</body>
</html>