<?php
	include ("db_connect.php");
	session_start();
	$roles = array("A, D, P");
	if(!in_array($_SESSION['role'], $roles))
	{
		echo "You are trying to access a BAD Page. <a href='../login.php' >Login Again</a> ";
		session_destroy();
	}
	$patientName = $_POST['patientName'];
	$appdate = $_POST['appdate'];
	$docname = $_POST['docname'];
	$info = $_POST['info'];
	$sql = "INSERT INTO appointment_table (patient_name, date_time, doctor_name, info) 
			VALUES ('$patientName', '$appdate', '$docname', '$info')";
	$connect->query($sql);

	header("Location: viewappoint.php");
?>