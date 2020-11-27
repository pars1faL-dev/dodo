<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','35');
	$query = mysqli_query($con, "INSERT INTO trash (img, price, name) VALUES ('{$_GET["img"]}','{$_GET["price"]}','{$_GET["name"]}')");
	header("Location: index.php");
 ?>