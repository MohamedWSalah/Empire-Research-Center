<?php
if (!isset($_SESSION)){
	$str=rand();//generate a random value for the session 
	$_SESSION['phpsessid']=$data=sha1($str); // encode the value stored in the session 
	$_SESSION['ROLE']=""; }
?>