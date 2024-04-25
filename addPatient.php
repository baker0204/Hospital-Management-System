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
		$phone_num = $_POST["patientPhone"];
		$emergency_contact = $_POST["emergencyContact"];
		$address = $_POST["patientAddress"];
		$cancer = $_POST["cancer"];
		$diabetes = $_POST["diabetes"];
		$highblood = $_POST["highblood"];
		$lowblood = $_POST["lowblood"];
		$heartdisease = $_POST["heartdisease"];
		$asthma = $_POST["asthma"];
		$seizure = $_POST["seizure"];
		$stroke = $_POST["stroke"];
		$history = $_POST["otherHistory"];
		$lactose = $_POST["lactose"];
		$nuts = $_POST["nuts"];
		$peanuts = $_POST["peanuts"];
		$epinephrine = $_POST["epinephrine"];
		$milk = $_POST["milk"];
		$eggs = $_POST["eggs"];
		$wheat = $_POST["wheat"];
		$fish = $_POST["fish"];
		$otherAllergies = $_POST["otherAllergies"];
		$medNum = $_POST["medNum"];
		$medArea;
		$doseArea;
		for ($i = 0; $i < $medNum; $i++)
		{
			try 
			{
				$medArea .= $_POST["meds".1.$i];
			}
			catch (Exception $e){}
			try 
			{
				$doseArea .= $_POST["meds".2.$i];
			}
			catch (Exception $e2){}
		}
		$accNum = $_POST["accNum"];
		$accArea;
		$dateAccArea;
		for ($i = 0; $i < $accNum; $i++)
		{
			try 
			{
				$accArea .= $_POST["accs".1.$i];
			}
			catch (Exception $e){}
			try 
			{
				$dateAccArea .= $_POST["accs".2.$i];
			}
			catch (Exception $e2){}
		}
		$surgNum = $_POST["surgNum"];
		$surgArea;
		$dateSurgArea;
		for ($i = 0; $i < $surgNum; $i++)
		{
			try 
			{
				$surgArea .= $_POST["accs".1.$i];
			}
			catch (Exception $e){}
			try 
			{
				$dateSurgArea .= $_POST["accs".2.$i];
			}
			catch (Exception $e2){}
		}
		$other = $_POST["other"];
		$sql = "INSERT INTO patient_table (name, dob, sex, phone_num, em_contact, address, cancer, diabetes, hbloodpress, lbloodpress, heartdisease, asthma, seizures, strokes, otherhist, lactose, treenuts, peanuts, epinephrine, milk, eggs, wheat, fish, otherallg, medication, dosage, incident, dateofinc, surgery, dateofsurg, other) 
		VALUES ('$name', '$dob', '$sex', '$emergency_contact', '$emergency_contact', $address', $cancer, $diabetes, $highblood, $lowblood, $heartdisease, $asthma, $seizure, $stroke, '$history', $lactose, $treenuts, $peanuts, $epinephrine, $milk, $eggs, $wheat, $fish, '$otherAllergies', '$medArea', '$doseArea', '$accArea', $dateAccArea', '$surgArea', '$dateSurgArea', '$other')";
		$connect->query($sql);
		header("Location: main.php");
	}
?>	