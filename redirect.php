<?php

	session_start();
	
	$_SESSION['id']=$_POST['uid'];
	$_SESSION['pwd']=$_POST['pwd'];
	$_SESSION['role'] = "A";
	
	echo $_SESSION['role'];
	echo "hello";
	
	header("Location: 'main.php'");

?>