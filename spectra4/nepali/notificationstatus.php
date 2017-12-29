<?php 
session_start();
if(!isset($_SESSION['user'])){
	header('location:frontendlogin.php?error=400');//not login\
	exit;
}

?>