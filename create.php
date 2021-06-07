<?php
require_once 'connection.php';

$NameRobot=$_POST['NameRobot'];

$Discription=$_POST['Discription'];

mysqli_query($connect, "INSERT INTO `Robot` (`Id`, `Author`,`NameRobot`, `Discription`) VALUES (NULL,'$Author', '$NameRobot', '$Discription')");

header ('Location:edit.php');
?>