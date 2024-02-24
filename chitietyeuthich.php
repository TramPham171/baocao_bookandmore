
<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />

</head>
<style>
	
	.wrapper {
		height: auto;
		width: 90%;
		margin: 0 auto;
		border: 1px solid lightsteelblue;
	}
	.item {
    	display: inline-block;
	}
	.item.item-like {
		width: 230px;
		margin: 31px 8px;
	}
	.content {
		height: auto;
		width: 95%;
		margin: 30px 50px;
	}
	.image {
		padding-left: 15px;
	}
	.info {
		text-align: center;
	}
	.info a {
		color: black;
		text-decoration: none;
	}
	#bothich{
		color:red;	
	}
	.info p a:hover{
		text-decoration:underline;	
	}
</style>
<body>
<div class="wrapper">
	<?php
        include("./blocks/header.php");
    ?>
    <div class="content">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="trangchu.php">Home</a></li>
            <li class="breadcrumb-item"><a href="chitietyeuthich.php">Yêu thích</a></li>
          </ol>
        </nav>
        <h3 class="tittle">Sách yêu thích</h3>
        <div class="item">
           <?php
			if(!empty($_SESSION['yeuthich'])){
				foreach($_SESSION['yeuthich'] as $values){
					echo '
					<div class="item item-like">
						<div class="image">
							<a href="chitietsach.php?id='.$values['id_sach'].'"><img src="img/'.$values['img_sach'].'" width="200" height="260"/></a>
							
						</div>
						<div class="info">
							<p><a href="chitietsach.php?id='.$values['id_sach'].'">'.$values['ten_sach'].'</a><br>
							<a id="bothich" href="deletethich.php?id='.$values['id_sach'].'"><i class="fa-solid fa-xmark"></i> Bỏ thích</a></p>
						</div>
					</div>
					';
				  }
			}
			else {
				echo '<p>Bạn chưa có tác phẩm yêu thích</p>';
				echo '<p>Click <a href="trangchu.php">vào đây</a> để bạn có thể thêm sách vào bộ sưu tập yêu thích</p>';	
			}
			?>
        </div>	
    </div>
    <?php
        include("./blocks/footer.php");
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
