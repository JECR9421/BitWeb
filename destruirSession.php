<?php 
$Url="http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/"; 
session_start();
//unset($_SESSION['usuario']);
session_destroy();
//header("Refresh:0");
echo $Url."BitWeb";
header('Location:/BitWeb');


?>