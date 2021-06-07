<?php 

	$adresserver='localhost';
	$nameuser='root';
	$password='';
	$link=mysqli_connect($adresserver, $nameuser, $password) or die('Ошибка'.mysqli_error($link));
 ?>