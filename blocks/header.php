<style>
.header{
    background-image: url(img/banner1.png);
    background-repeat: no-repeat;
    background-size: 590px;
    background-position-x: 190px;
    background-position-y: -20px;
    width: 100%;
    height: 100%;
}
.container .row{
	margin-top:0px;
	
	align-items:center;
	justify-content:center	;
}
.container .row .col-sm-7 a img{
	margin-left:60px;
	margin-bottom:5px;	
}
.container .row .col a{
	font-size:20px;
	color: limegreen;
    text-decoration: none;
    font-weight: 600;	
}
.container .row .col a:hover{
	color:#000;	
}
.container .row  .col-sm-2 img{
	padding-left:50px;	
}
.container .row  .col-sm-4 span{
	font-size:17px;
	font-weight:bold;	
}
.container .row  .col-sm-4 .btn{
	border:3px solid red;
	background-color:white !important;
    color:#F30 !important;
	font-size:18px;
	font-weight:bold;
}
.container .row  .col-sm-4 .btn:hover{
	background-color: #FF6868 !important;
	color:white !important;
}
.navbar {
    display:block !important;
	background-color:  #27968B !important;  
}
.navbar ul li{
	position:relative !important;	
}
.navbar li a{
	color: #FFF !important;
	font-size:20px !important;
}
.navbar li a:hover{
	background-color:#CCC !important;
	color: #000 !important;
}
.dropdown-menu{
	
	background-color: #80FF80 !important;
	border:2px solid lightseagreen !important;
	
}
.navbar .dropdown-menu {
	position:absolute !important;
	display:none !important;
}
.navbar li:hover .dropdown-menu {
	display:block !important;
}
.dropdown-menu li a{
	color: #000 !important;
}
.dropdown-menu li a:hover{
	color: #F00 !important;
}
.btn{
	background-color: mediumaquamarine !important;
    color:#FFF!important;	
}
.btn:hover{
	background-color: #6FF!important;
}
</style>
<a name="top"></a>

	<div class="header">
    	<div class="container ">
          <div class="row">
            <div class="col-sm-7">
              <a href="trangchu.php"><img src="img/logo.png" width="140px" height="140px" /></a> 
            </div>
            <div class="col-sm-5 ">
              <div class="row">
              	<div class="col col-sm-1">
                  <i class="fa-solid fa-user"></i>
                </div>
         
                <?php
					include("db_connect.php");
					//session_start();	
					if(isset($_SESSION['user_ad'])){
						$username = $_SESSION['user_ad'];
				?>
				<div class="col col-sm-4">
                  	<span>
						<?php 
                            echo $_SESSION['hoten']
                        ?>
                    </span> 
                </div>
                <div class="col col-sm-3">
                  	<a href="logout.php">Đăng xuất</a>
                </div>
                 <?php 
                     }              
                     else if(isset($_SESSION['user'])){
						 $user = $_SESSION['user'];
                         $currentTime = time();
                         if($currentTime > $_SESSION['expire']){
                             header("Location: logout.php");
                         }       
                         else{
				 ?>
                 	<div class="col col-sm-4">
                  		<span><?php echo  $_SESSION['hoten']?></span> 
                	</div>
                	<div class="col col-sm-3">
                  		<a href="logout.php">Đăng xuất</a>
                	</div>
                 <?php
					 	}
					 }
					 else{
				 ?>
                        <div class="col col-sm-3">
                  				<a href="login.php">Đăng nhập</a>
                		</div>
                			  <div class="col col-sm-3">
                  				<a href="register.php">Đăng ký</a>
                			  </div>
                  <?php
                         }                       
              	  ?>
                <div class="col col-sm-4"> 
                	<a href="chitietyeuthich.php">
                        <button class="btn btn-primary" type="button">
                        <i class="fa-sharp fa-solid fa-heart"></i> Yêu thích</button>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    		
				

    <!--end header-->
    

   <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
         
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="trangchu.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Thể loại
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="vanhocvn.php">Văn học Việt Nam</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="tho.php">Thơ</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="vanhocnuocngoai.php">Văn học nước ngoài</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Bộ sưu tập</a>
              </li>
            </ul>
            <form class="d-flex" role="search" method="POST" action="timkiem.php">
              <input class="form-control me-1" name="search" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" name="clicksearch" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

 </div>
 