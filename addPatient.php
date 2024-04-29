<?php
	include ("db_connect.php");
	session_start();
	$roles = array("A", "D");
	if(!in_array($_SESSION['role'], $roles))
	{
		echo "You are trying to access a BAD Page. <a href='../login.php' >Login Again</a> ";
		session_destroy();
	}
	
	else
	{
		$name = $_POST["patientName"];
		$dob = $_POST["patientDOB"];
		$sex = $_POST["patientSex"];
		$phone_num = $_POST["patientPhone"];
		$emergency_contact = $_POST["emergencyContact"];
		$address = $_POST["patientAddress"];
		if (isset($_POST['cancer'])){ $cancer = 1;}
		else{$cancer=0;}
		if (isset($_POST['diabetes'])){ $diabetes = 1;}
		else{$diabetes=0;}
		if (isset($_POST['highblood'])){ $highblood = 1;}
		else{$highblood=0;}
		if (isset($_POST['lowblood'])){ $lowblood = 1;}
		else{$lowblood=0;}
		if (isset($_POST['heartdisease'])){ $heartdisease = 1;}
		else{$heartdisease=0;}
		if (isset($_POST['asthma'])){ $asthma = 1;}
		else{$asthma=0;}
		if (isset($_POST['seizure'])){ $seizure = 1;}
		else{$seizure=0;}
		if (isset($_POST['stroke'])){ $stroke = 1;}
		else{$stroke=0;}
		$history = $_POST["otherHistory"] ?? "";

		if (isset($_POST['lactose'])){ $lactose = 1;}
		else{$lactose=0;}
		if (isset($_POST['nuts'])){ $treenuts = 1;}
		else{$treenuts=0;}
		if (isset($_POST['peanuts'])){ $peanuts = 1;}
		else{$peanuts=0;}
		if (isset($_POST['epinephrine'])){ $epinephrine = 1;}
		else{$epinephrine=0;}
		if (isset($_POST['milk'])){ $milk = 1;}
		else{$milk=0;}
		if (isset($_POST['eggs'])){ $eggs = 1;}
		else{$eggs=0;}
		if (isset($_POST['wheat'])){ $wheat = 1;}
		else{$wheat=0;}
		if (isset($_POST['fish'])){ $fish = 1;}
		else{$fish=0;}
		$otherAllergies = $_POST["otherAllergies"] ?? "";
		$medNum = $_POST["medNum"] ?? 0;
		$medArea = "";
		$doseArea = "";
		for ($i = 0; $i < $medNum; $i++)
		{
			try 
			{
				$medArea .= $_POST["meds"."1".$i] . ",";
			}
			catch (Exception $e){}
			try 
			{
				$doseArea .= $_POST["meds"."2".$i] . ",";
			}
			catch (Exception $e2){}
		}
		$accNum = $_POST["accNum"] ?? 0;
		$accArea = "";
		$dateAccArea = "";
		for ($i = 0; $i < $accNum; $i++)
		{
			try 
			{
				$accArea .= $_POST["accs"."1".$i] . ",";
			}
			catch (Exception $e){}
			try 
			{
				$dateAccArea .= $_POST["accs"."2".$i] . ",";
			}
			catch (Exception $e2){}
		}
		$surgNum = $_POST["surgNum"] ?? 0;
		$surgArea = "";
		$dateSurgArea = "";
		for ($i = 0; $i < $surgNum; $i++)
		{
			try 
			{
				$surgArea .= $_POST["accs"."1".$i] . ",";
			}
			catch (Exception $e){}
			try 
			{
				$dateSurgArea .= $_POST["accs"."2".$i] . ",";
			}
			catch (Exception $e2){}
		}
		$other = $_POST["other"] ?? "";
		$sql = "INSERT INTO patient_table (pid, name, dob, sex, phone_num, em_contact, address, cancer, diabetes, hbloodpress, lbloodpress, heartdisease, asthma, seizures, strokes, otherhist, lactose, treenuts, peanuts, epinephrine, milk, eggs, wheat, fish, otherallg, medication, dosage, incident, dateofinc, surgery, dateofsurg, other) 
		VALUES (NULL, '$name', '$dob', '$sex', '$phone_num', '$emergency_contact', '$address', $cancer, $diabetes, $highblood, $lowblood, $heartdisease, $asthma, $seizure, $stroke, '$history', $lactose, $treenuts, $peanuts, $epinephrine, $milk, $eggs, $wheat, $fish, '$otherAllergies', '$medArea', '$doseArea', '$accArea', '$dateAccArea', '$surgArea', '$dateSurgArea', '$other')";
		$connect->query($sql);
		header("Location: main.php");
	}
?>	