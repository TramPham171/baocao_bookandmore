
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="css/page1.css" />
<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />
</head>

<body>
<div class="wrapper">
<?php
	require_once("./blocks/header.php");
?>


<div class="page-wrap">

        <div class="grid wide">
        
        <div class="row">
        <?php                  
		include("db_connect.php");
			$page = isset($_GET['page'])?$_GET['page']:1;
			$limit = 10;
			$start =($page-1)*$limit;	
			$timkiem = $_POST['search'];
			$sql = "SELECT * FROM sach WHERE tensach like '%" . $timkiem . "%' or loaisach like '%" . $timkiem . "%' LIMIT $start, $limit";
			$result = mysqli_query($conn,$sql);
			
			$rs = mysqli_num_rows($result);
			
			if($rs>0)
				echo '<h2>Có '.$rs.' kết quả cần tìm</h2>';
			else
				echo '<h2>Không có kết quả cần tìm</h2>';
			
			
			 while($row = mysqli_fetch_array($result)){
         ?>
        
         <div class="col ">
                   <div class="item">
                        <a href="chitietsach.php?id=<?=$row['idsach'];?>">
                            <img src="./img/<?php echo $row["img"] ?>" width="200" height="260" style="padding-top:5px"/>
                        <a href="chitietsach.php?id=<?=$row['idsach'];?>"><?php echo $row["tensach"] ?></a>
                  
                     
                      <form name="form1" action="addyeuthich.php" method="post">
                        <input type="submit" name="addthich" id="addthich" value="Thích" />  
                        <input type="hidden" name="img" value="<?=$row['img']?>" />  
                        <input type="hidden" name="tensach" value="<?=$row['tensach']?>" />
                        <input type="hidden" name="idsach" value="<?=$row["idsach"]?>" />              
                      </form>
                    
                    </div>             	                                                            
           </div>
           <?php 
                 	} 
           ?>
         </div>   
      </div><!-- end row -->
    
       </div>
          
    <!--Trang-->
    
<?php
	require_once("blocks/footer.php");
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>