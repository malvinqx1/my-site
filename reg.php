<?php header("Content-Type: text/html; charset=utf-8");?>
<?php 
    $Name=filter_var(trim($_POST['Name']),
    FILTER_SANITIZE_STRING);

    $Login=filter_var(trim($_POST['Login']),
    FILTER_SANITIZE_STRING);

    $Password=filter_var(trim($_POST['Password']),
    FILTER_SANITIZE_STRING);

$Password = md5($Password."bdhfbh78dfd");

$mysql = new mysqli('localhost','root','','Intelect');
$mysql->query("INSERT INTO  `Authorization` (`Name`,`Login`,`Password`) VALUES('$Name','$Login','$Password')"); 

$mysql->close();

header('Location: /');
?>

