<?php
	include ("db_connect.php");
	session_start();
	$roles = array("A");
	if(!in_array($_SESSION['role'], $roles))
	{
		echo "You are trying to access a BAD Page. <a href='../login.php' >Login Again</a> ";
		session_destroy();
	}
	$did = $_POST["did"];
	$sql = "DELETE FROM doctor_table WHERE `doctor_table`.`did` = $did";
	$connect->query($sql);
	header("Location: removedoctor.php");	
?>