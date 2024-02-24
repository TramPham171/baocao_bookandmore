<?php
    $conn = mysqli_connect("localhost","root","")
	or die ("Không thể kết nối cơ sở dữ liệu");
	mysqli_select_db($conn,"qldoan") or die ("Không có cơ sở dữ liệu");
?>