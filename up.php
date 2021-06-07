<?php
    require_once 'connection.php';

$Id=$_POST['Id'];
$Namerobot=$_POST['Namerobot'];
$Author=$_POST['Author'];
$Discription=$_POST['Discription'];
mysqli_query($connect, "UPDATE `Robot` SET `Namerobot` = '$Namerobot',`Author` = '$Author', `Discription` = '$Discription' WHERE `Robot`.`Id` = '$Id'");
header('Location: edit.php');
?>