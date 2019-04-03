<?php
session_start();
session_destroy();
$password=$_COOKIE['password'];
setcookie('password',$password,time()-1);
echo"<center>REDIRECTING >>>>>>>>>>>>></center>";
header('Location: login practise.php');

?>