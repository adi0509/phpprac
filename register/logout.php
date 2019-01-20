<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "You are npw logged out";
	header("location: login.php");
?>