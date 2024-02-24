<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Văn học Việt Nam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/page1.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css" />

</head>
<body>
<a name="top"></a>
<div class="wrapper">
	<?php
      require_once("blocks/header.php");
	 ?>
  <!--end menu-->
    <div class="page-wrap">
    
    <h1>Văn học nước ngoài</h1>
     <div class="grid wide">
        <div class="row">
        	 <?php                  
		include("db_connect.php");
		$sql = "SELECT * FROM `sach` WHERE loaisach = 'Văn học nước ngoài'";
		$result = mysqli_query($conn,$sql);
		
		
         while($row = mysqli_fetch_array($result)){
         ?>
        
         <div class="col ">
			 
                   <div class="item">
                        <a href="chitietsach.php?id=<?=$row['idsach'];?>">
                            <img src="./img/<?php echo $row["img"] ?>" width="200" height="260" style="padding-top:5px"/>
                        </a>
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
        
     </div>
    
    </div>
  <!--end pagewrap-->
  
<?php
	require_once("blocks/footer.php");
?>
</div>  
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>