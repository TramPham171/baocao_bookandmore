<?php
	session_start();
	ob_start();
	if(isset($_SESSION['yeuthich'])){
		foreach($_SESSION['yeuthich'] as $key => $values){
			if($values["id_sach"] == $_GET['id']){
				unset($_SESSION['yeuthich'][$key]);
			}
		}
		header("location:chitietyeuthich.php");
	}
?>