<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />

</head>
<style>
	body{
	margin:0;
	padding:0;	
}
.wrapper {
    height: auto;
    width: 90%;
    margin: 0 auto;
    border: 1px solid lightsteelblue;
}
.page{
	width:90%;
    margin: 0px 65px;
    padding-top:3%; 
    position: relative;
}
h2.tittle-detail {
    
	text-transform:uppercase;
	margin:5px 40px;
}
.detail-info {
   	margin-left:20px;
	margin-top:20px;
	margin-bottom:50px;
}

.col-xs-8 col-info{
	 align-items: center;
	padding-left:10px;	
}
.content{
	margin:40px 0px;	
}
.accordion-button {
	    background-color: #d9a7a761 !important;
		font-size:18px !important;	
}
input#addthich {
	font-size:18px;
    border: none;
    height: 40px;
    width: 200px;
    background-color: gold;
    border-radius: 5px;
}
input:hover#addthich{
	background-color:#F90;
}
</style>
<body>
<div class="wrapper">
<?php
	include("./blocks/header.php");
?>
<?php
	include("db_connect.php");
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM sach WHERE idsach = '".$id."'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result))
	   {	
	?>
    
 <div class="page">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="trangchu.php">Home</a></li>
        <li class="breadcrumb-item"><a href="#"><?=$row['tensach']?></a></li>
      </ol>
    </nav>	
    <div id="item-detail">
		<h2 class="tittle-detail"><?=$row['tensach']?></h2>
        <div class="detail-info" >
            <div class="row">
                 <div class="col-xs-4 col-image" style="width:230px;align-items: center;">
                    <img src="img/<?=$row['img']?>" width="210" height="280"/>
                 </div>
                 <div class="col-xs-8 col-info"  style="width:1000px">
                        <div class="row">
                            <p class="col-xs-4" style="width:150px"><i class="fa fa-user"></i> Tác giả</p>
                            <p class="col-xs-8" style="width:auto"><?=$row['tacgia']?></p>
                        </div>
                        <div class="row">
                            <p class="col-xs-4" style="width:150px"><i class="fa-sharp fa-solid fa-calendar"></i> Năm xuất bản</p>
                            <p class="col-xs-8" style="width:auto"><?=$row['namxb']?></p>
                        </div>
                        <div class="row">
                            <p class="col-xs-4" style="width:150px"><i class="fa fa-rss"></i> Tình trạng</p>
                            <p class="col-xs-8" style="width:auto"><?=$row['tinhtrang']?></p>
                        </div>
                        <div class=" row">
                            <p class="col-xs-4" style="width:150px"><i class="fa fa-tags"></i> Thể loại</p>
                            <p class="col-xs-8" style="width:auto">
                            <?=$row['loaisach']?>
                            </p>
                        </div>
                        <div class=" row">
                            <p class="col-xs-4" style="width:130px"><i class="fa-solid fa-book"></i> Tóm tắt</p>
                            <p class="col-xs-8" style="width:890px">
                            <?=$row['tomtat']?>
                            </p>
                        </div>
                        <form name="form1" action="addyeuthich.php" method="post">
                        <input type="submit" name="addthich" id="addthich" value="Thêm vào yêu thích" />  
                        <input type="hidden" name="img" value="<?=$row['img']?>" />  
                        <input type="hidden" name="tensach" value="<?=$row['tensach']?>" />
                        <input type="hidden" name="idsach" value="<?=$row["idsach"]?>" />              
                      </form>
                    	
                  </div>
                  
             </div>
         </div>
      </div>
      
      <div class="content">
            <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Đọc</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    	<div class="accordion-body"><?=$row['noidung']?></div>
                    </div>
                  </div>
       		</div>
      </div>
<div class="comment">
    <iframe src="binhluan.php?idsach=<?=$_GET['id']?>" frameborder="0" width="100%" height="400px"></iframe>
 </div>
      <?php 
		}
	?>
 </div>   
    <?php
		include("./blocks/footer.php");
	?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>