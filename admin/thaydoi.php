<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/thaydoi_css.css" />
<link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.min.css" />
</head>

<body>
<script language="javascript">
	function checkInput(){
		if(document.frmchange.username.value==""){
			alert("Bạn cần nhập tên đăng nhập");
			document.frmchange.username.focus();
			return false;	
		}
		if(document.frmchange.oldpass.value==""){
			alert("Bạn cần nhập mật khẩu cũ");
			document.frmchange.oldpass.focus();
			return false;	
		}
		if(document.frmchange.newpass.value==""){
			alert("Bạn cần nhập mật khẩu mới");
			document.frmchange.newpass.focus();
			return false;	
		}
		if(document.frmchange.confirmpass.value==""){
			alert("Bạn cần nhập xác nhận mật khẩu");
			document.frmchange.confirmpass.focus();
			return false;	
		}
		if(document.frmchange.confirmpass.value!=document.frmchange.newpass.value){
			alert("Xác nhận mật khẩu không khớp với mật khẩu. Vui lòng nhập lại!");
			document.frmchange.confirmpass.focus();
			return false;
		}
		return true;	
	}
</script>
<div class="wrapper">

  <form id="form-changepass" name="frmchange" method="post" onsubmit="return checkInput();" action="luuthaydoi.php" >
    	<a href="home.php"><i class="fa-sharp fa-solid fa-square-xmark" style="padding-left:380px; color:white"></i></a>
    	<h1 class="form-heading">Thay đổi mật khẩu</h1>
        <div class="form-group">
          <input name="username" type="text" class="form-input" id="username" placeholder="Tên đăng nhập" />
        </div>
        <div class="form-group">
          <input name="oldpass" type="password" class="form-input" id="oldpass" placeholder="Mật khẩu cũ" />
        </div>
        <div class="form-group">
          <input name="newpass" type="password" class="form-input" id="newpass" placeholder="Mật khẩu mới"/>
        </div>
        <div class="form-group">
          <input name="confirmpass" type="password" class="form-input" id="confirmpass" placeholder="Xác nhận mật khẩu"/>
        </div>
        <input type="submit" class="form-submit" value="Thay đổi" />
       
    </form>
</div>
</body>

</html>