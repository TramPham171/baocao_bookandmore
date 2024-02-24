<style>
	.container .row{
		margin-top:0px;
		
		align-items:center;
		justify-content:center	;
	}
	.container .row .col-sm-2 a img{
		margin-left:60px;
		margin-bottom:5px;	
}
	.row .col-sm-4 a{
		color: #ff0000;
		text-decoration: none;
		font-size: 18px;
	}
	.row .col-sm-4 a:hover{
		color: teal;
	}
	.menu{
		display:flex;	
	}
	.menu ul{
		background-color:#27968B;
		list-style-type:none;
		display:block;
		height:60px;
		width:100%;
		text-align:center;
		margin:0;
		
	}
	.menu ul li{
		float:left;	
		
		height:60px;
	line-height:60px;   		/*cho text nằm giữa dòng*/

	padding:0px 30px;
	}
	.menu ul li a {
		
		color: #fff;
		text-decoration: none; 
		font-size:20px;
	}
	.menu ul li a:hover {
		color: #000;
	}
</style>

<div class="header">
    	<div class="container ">
          <div class="row">
                <div class="col-sm-2">
                  <a href="../trangchu.php"><img src="../img/logo.png" width="140px" height="140px" /></a> 
                </div>
            	<div class="col-sm-6">
              		<h3>Chào <?= $_SESSION['hoten']?> đến với trang ADMIN</h3>
              	</div>
                <div class="col-sm-4" > 
                	<div class="row" style="text-align:center">
                    
                    	
                    	<div class="col col-sm-4"> 
                           <a href="../logout.php">Đăng xuất</a>
                        </div>
						
                        <div class="col col-sm-4"> 
                            <a href="thaydoi.php">Đổi mật khẩu</a>
                        </div>
                 	</div>
                </div>
                
            </div>
         
            </div>
           <div class="menu">
           
       	  	<ul>
               	<li><a href="home.php?q=qlsach">QUẢN LÝ SÁCH</a></li>
            	<li><a href="home.php?q=qluser">QUẢN LÝ NGƯỜI DÙNG</a></li>
            	<li><a href="home.php?q=qlcmt">QUẢN LÝ BÌNH LUẬN</a></li>
            </ul>
            
        </div>
          </div>
 

 