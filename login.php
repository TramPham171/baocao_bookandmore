<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/login_css.css" />
<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />

</head>
<script language="javascript">
	function checkInput()
	{
		if(document.frmdangnhap.username.value == "")
		{
			alert("Bạn phải nhập tên đăng nhập");
			document.frmdangnhap.username.focus();	
			return false;
		}
		if(document.frmdangnhap.password.value == "")
		{
			alert("Bạn phải nhập mật khẩu");
			document.frmdangnhap.password.focus();	
			return false;
		}
		return true;	
	}
</script>
<style>
	#form-login a i:hover{
		color:#F33 !important;
	}
</style>
<body>

<div id="wrapper">
  
    <form id="form-login" name="frmdangnhap" method="post" action="save_login.php" onsubmit="return checkInput()">
    <a href="trangchu.php"><i class="fa-sharp fa-solid fa-square-xmark" style="padding-left:380px; color:white"></i></a>
      <h1 class="form-heading">Đăng nhập </h1>
      <div class="form-group">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" 
	viewBox="0 0 16 16">
  	<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
	</svg>
        <input name="username" type="text" class="form-input" id="username" placeholder="Tên đăng nhập"/>
      </div>
         
      <div class="form-group">
      	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" 
		viewBox="0 0 16 16">
  		<path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 		9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
        <input name="password"  type="password" class="form-input" id="password" placeholder="Mật khẩu" />
      </div> 
          
       <input type="submit" class="form-submit" value="Đăng nhập" />
       <p>Bạn chưa có tài khoản? Đăng ký <a href="register.php">tại đây</a></p>
      
      <p>&nbsp;</p>
    </form>
</div>
</body>
</html>