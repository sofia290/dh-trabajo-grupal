<?php
session_start();
if(isset($_SESSION["usuario"])){
session_destroy();
setCookie("username","",time()-1);
}
header("Location:index.php");
?>
