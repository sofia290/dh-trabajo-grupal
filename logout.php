<?php
session_start();
if(isset($_SESSION["user_id"])){
session_destroy();
setCookie("usuario","",time()-1);
}
header("Location:index.php");
?>
