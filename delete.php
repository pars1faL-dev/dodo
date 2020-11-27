<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','35');
	$query = mysqli_query($con, "DELETE * FROM trash (id, img, price, name) VALUES ('{$_GET["id"]}','{$_GET["img"]}','{$_GET["price"]}','{$_GET["name"]}')");
	header("Location: index.php");
 ?>