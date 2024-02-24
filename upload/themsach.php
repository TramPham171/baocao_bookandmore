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
		margin-left: 120px;
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
	#button,#button2 {
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
<form action="save_sach.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="1237" border="0">
    <tr>
      <td colspan="2">
       	  <a href="../admin/home.php?q=qlsach">
          	<i class="fa-sharp fa-solid fa-square-xmark" style="color:white;float:right;font-size:24px;"></i>
          </a>
          <div align="center">  
          	<h1>THÊM SÁCH MỚI</h1>
          </div>
      </td>
    </tr>
    
    <tr>
      <td width="119">Tên sách</td>
      <td width="1108">
      <input name="tensach" type="text" id="tensach" size="70" /></td>
    </tr>
    
    <tr>
      <td>Loại sách</td>
      <td><label for="loaisach"></label>
      <input name="loaisach" type="text" id="loaisach" size="50" /></td>
    </tr>
    <tr>
      <td>Tác giả</td>
      <td><label for="tacgia"></label>
      <input name="tacgia" type="text" id="tacgia" size="50" /></td>
    </tr>
    <tr>
      <td>Năm xuất bản</td>
      <td><label for="nxb"></label>
      <input type="text" name="nxb" id="nxb" /></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><label for="img"></label>
      <input type="file" name="img" id="img" /></td>
    </tr>
    <tr>
      <td>Tình trạng</td>
      <td><label for="tinhtrang"></label>
      <input name="tinhtrang" type="text" id="tinhtrang" size="40" /></td>
    </tr>
    <tr>
      <td>Tóm tắt</td>
      <td><label for="tomtat"></label>
      <textarea name="tomtat" id="tomtat" cols="100" rows="6"></textarea></td>
    <script>CKEDITOR.replace('tomtat');</script>
    </tr>
    <tr>
      <td>Noi dung</td>
      <td><label for="noidung"></label>
      <textarea name="noidung" id="noidung" cols="150" rows="10"></textarea></td>
    <script>CKEDITOR.replace('noidung');</script>
    </tr>
    <tr>
      <td colspan="2"><blockquote>
        <p align="center">
          <input type="submit" name="Submit" id="button" value="Lưu" />
          <input type="reset" name="button2" id="button2" value="Reset" />
        </p>
      </blockquote></td>
    </tr>
  </table>
</form>
</body>
</html>