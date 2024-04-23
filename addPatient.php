<?php
	include ("../db_connection.php");
	session_start();
	
	if(($_SESSION['role'] == "P"))
	{
		echo "You are trying to access a BAD Page. <a href='../login.php' >Login Again</a> ";
		session_destroy();
	}
	
	else
	{
		$name = $_POST["patientName"];
		$dob = $_POST["patientDOB"];
		$sex = $_POST["patientSex"];
		INSERT INTO `patient_table` (`pid`, `name`, `dob`, `sex`, `phone_num`, `em_contact`, `address`, `cancer`, `diabetes`, `hbloodpress`, `lbloodpress`, `heartdisease`, `asthma`, `seizures`, `strokes`, `otherhist`, `lactose`, `treenuts`, `peanuts`, `epinephrine`, `milk`, `eggs`, `wheat`, `fish`, `otherallg`, `medication`, `dosage`, `incident`, `dateofinc`, `surgery`, `dateofsurg`, `other`) 
		VALUES (1, 'John Doe', '1999-09-22', 'male', '4792332121', 'Jane Doe (wife): 5018885431', '16 Razorback Rd. Fayetteville, AR. 72701', 1, 0, 1, 0, 0, 0, 0, 0, 'Mental Illness', 0, 0, 0, 0, 0, 0, 0, 0, 'Amoxicillin ', 'SSRI', '50mg', 'Broken Arm', '12/25/2011', 'Benign tumor removal', '06/07/2021', 'N/A');
	}
?>	