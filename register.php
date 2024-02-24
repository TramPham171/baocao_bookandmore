<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register</title>
<link rel="stylesheet" type="text/css" href="css/register_css.css" />
<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />

</head>

<script language="javascript">
	function checkInput()
	{
		if(document.frmdangky.name.value == "")
		{
			alert("Bạn hãy nhập họ tên của bạn");
			document.frmdangky.name.focus();
			return false;	
		}
		if(document.frmdangky.email.value == "")
		{
			alert("Bạn hãy nhập email vào");
			document.frmdangky.email.focus();
			return false;	
		}
		if(document.frmdangky.username.value == "")
		{
			alert("Bạn hãy nhập tên đăng nhập của bạn vào");
			document.frmdangky.username.focus();
			return false;	
		}
		if(document.frmdangky.password.value == "")
		{
			alert("Bạn hãy nhập mật khẩu vào");
			document.frmdangky.password.focus();
			return false;	
		}
		if(document.frmdangky.confirmpass.value == "")
		{
			alert("Bạn hãy nhập xác nhận mật khẩu vào");
			document.frmdangky.confirmpass.focus();
			return false;	
		}
		if(document.frmdangky.password.value != document.frmdangky.confirmpass.value)
		{
			alert("Xác nhận mật khẩu không khớp với mật khẩu");
			document.frmdangky.confirmpass.focus();
			return false;	
		}
		return true;
		
		
	}
</script>
<style>
	#form-register a i:hover{
		color:#F33 !important;
	}
</style>
<body>
<div class="wrapper">

    <form id="form-register" name="frmdangky" method="post" action="save_register.php" onsubmit="return checkInput()">
    	<a href="trangchu.php"><i class="fa-sharp fa-solid fa-square-xmark" style="padding-left:380px; color:white"></i></a>
    	<h1 class="form-heading">Đăng ký</h1>
        
        <div class="form-group">
        	<input name="name" type="text" class="form-input" id="name" placeholder="Họ và tên"/>
        </div>
         <div class="form-group">
          	<input name="email" type="text" class="form-input" id="email" placeholder="Email"/>
        </div>
        <div class="form-group">
        	<input name="username" type="text" class="form-input" id="username" placeholder="Tên đăng nhập"/>
        </div>
        <div class="form-group">
        	<input name="password" type="password" class="form-input" id="password" placeholder="Mật khẩu" />
        </div>
        <div class="form-group">
        	<input name="confirmpass" type="password" class="form-input" id="confirmpass" placeholder="Xác nhận mật khẩu"/>
        </div>
        <input type="submit" class="form-submit" value="Đăng ký" />
        <p>Bạn đã có tài khoản? Đăng nhập <a href="login.php">tại đây</a></p>
    </form>
</div>

</body>
</html>