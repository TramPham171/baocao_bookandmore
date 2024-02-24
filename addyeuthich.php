<?php
	session_start();
	
	if(isset($_POST['addthich'])){
		if(isset($_SESSION['yeuthich'])){
			$sach_array_id = array_column($_SESSION['yeuthich'],'id_sach');
			if(!in_array($_POST['idsach'],$sach_array_id)){
			    $dem = count($_SESSION['yeuthich']);
				$sach_array = array(
				'id_sach' 	=>	$_POST['idsach'],
				'ten_sach'   =>	$_POST['tensach'],
				'img_sach'   =>	$_POST['img']
				);
				$_SESSION['yeuthich'][$dem] = $sach_array ;
				header("location:chitietyeuthich.php");
			}
			else{
				echo '<script>alert("Sách đã có trong yêu thích")</script>'.
				 '<script>window.location="trangchu.php"</script>';
			}
		}
		else{
			$sach_array = array(
				'id_sach' 	=>	$_POST['idsach'],
				'ten_sach'   =>	$_POST['tensach'],
				'img_sach'   =>	$_POST['img']
			);
		$_SESSION['yeuthich'][0] = $sach_array;
		header("location:chitietyeuthich.php");	
		}
	}
	
?>