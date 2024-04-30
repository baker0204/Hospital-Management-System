<?php
	include ("db_connect.php");
	session_start();
	$roles = array("A");
	if(!in_array($_SESSION['role'], $roles))
	{
		echo "You are trying to access a BAD Page. <a href='../login.php' >Login Again</a> ";
		session_destroy();
	}
	$name = $_POST["name"];
    $sex = $_POST["sex"];
    $specialty = $_POST["specialty"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone_num = $_POST["phone_num"];

    $query = "REPLACE INTO `doctor_table` (`name`, `sex`, `specialty`, `address`, `email`, `phone_num`) 
              VALUES ('$name', '$sex', '$specialty', '$address', '$email', '$phone_num')";

    $connect->query($query);
    header("Location: viewdoctor.php");
?>