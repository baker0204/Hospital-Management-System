<?php
	include ("db_connect.php");
	session_start();
	$roles = array("A");
	if(!in_array($_SESSION['role'], $roles))
	{
		echo "You are trying to access a BAD Page. <a href='../login.php' >Login Again</a> ";
		session_destroy();
	}
	$aid = $_POST["aid"];
	$sql = "DELETE FROM appointment_table WHERE `appointment_table`.`aid` = $aid";
	$connect->query($sql);
	header("Location: removeappt.php");	
?>