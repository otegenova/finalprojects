<?php
 session_start();

if(isset($_POST['login']) && isset($_POST['password']))
{

    $login=htmlspecialchars(trim($_POST['login']));
    $password=htmlspecialchars(trim($_POST['password']));
    $name=htmlspecialchars(trim($_POST['name']));
    $surname=htmlspecialchars(trim($_POST['surname']));
    $city=htmlspecialchars(trim($_POST['city']));

    
 

    include("bd.php");
 

    $res=mysql_query("SELECT `login` FROM `users` WHERE `login`='$login' ");
    $data=mysql_fetch_array($res);

    if(!empty($data['login']))
    {
        echo "9";
        exit();
    
    }
 

 

    $query="INSERT INTO `users` (`login`,`password`,`name`,`surname`,`city`) VALUES('$login','$password','$name','$surname','$city') ";
    $result=mysql_query($query);
 

    if($result==true)
    {
     
        $res=mysql_query("SELECT * FROM `users` WHERE `login`='$login' ");
    $data=mysql_fetch_array($res);
        $_SESSION['login']=$data['login'];
    $_SESSION['id']=$data['id'];
        echo "5";
    }


}
?>