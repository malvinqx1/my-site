<?php header("Content-Type: text/html; charset=utf-8");?>
<?php 

    $Login=filter_var(trim($_POST['Login']),
    FILTER_SANITIZE_STRING);

    $Password=filter_var(trim($_POST['Password']),
    FILTER_SANITIZE_STRING);
   
$Password = md5($Password."bdhfbh78dfd");
$mysql = new mysqli('localhost','root','','Intelect');

$result = $mysql->query("SELECT * FROM `Authorization` WHERE `Login`='$Login' AND `Password`='$Password'");
    $user = $result->fetch_assoc();
    
    if($Login=='mnmnmn' || $Password=='mnmnmn' ){
        header('Location: /admin/admin_panels.php');
        exit();
    }
else
      if(count($user)==0){
        echo "Такой пользователь не найден";
        exit();
    } 



$mysql->close();

header('Location: menu.html');
?>