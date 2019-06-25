<?php
session_start();
unset($_SESSION["PHPSESSID"]);
unset($_SESSION["ROLE"]);
$_SESSION=array();
$_SESSION=array();
 session_destroy(); //destroy entire session 
 session_destroy();
 header("Location: admin.php");

?>