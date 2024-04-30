<html>
<?php
	include("db_connect.php");
	session_start();
	$roles = array("A", "D");
	if(!in_array($_SESSION['role'], $roles))
	{
		echo "You do not have permission to access this page or you are not properly logged in. <a href='index.php' >Login Again</a> ";
		session_destroy();
		header('location: index.php');
	}
	else
	{
		$pid = $_POST["pid"];
		$sql_product="SELECT * FROM patient_table";
		$result_product=$connect->query($sql_product);
		while($row_product = $result_product->fetch_assoc())
		{
			if ($row_product["pid"] == $pid)
			{
?>
	<head>
		<title>St. Athanasius Edit Patient File</title>
		
		<link rel="stylesheet" href="css/css.css"/>
			
		<script type="text/javascript" src="js/js.js"> </script>
	</head>
<body bgcolor="#eceff4">
	<center>
    <img src="img/staroflife.png" width="10%">
    <br>
    <h1 align="center"> St. Athanasius Hospital </h1>
    <ul>
        <li class="menu-item"><a href="#" class="drp"> Appointment Management </a>
            <div class="menu-content">
                <a href="newappoint.php">New Appointment</a><br>
				<a href="removeAppt.php">Remove Appointment</a><br>
                <a href="viewappoint.php">View All Appointments</a><br>
            </div>
        </li>

        <li class="menu-item"><a href="#" class="drp"> Patient Management </a>
            <div class="menu-content">
                <a href="PatientFile.php">New Patient</a><br>
                <a href="billpatient.php">Bill Patient</a><br>
                <a href="viewpatients.php">View All Patients</a><br>
            </div>
        </li>

        <li class="menu-item"><a href="#" class="drp">Doctor Management </a>
            <div class="menu-content">
                <a href="adddoctor.php">Add Doctor</a><br>
                <a href="removedoctor.php">Remove Doctor</a><br>
                <a href="viewdoctor.php">Display all Doctors</a><br>
            </div>
        </li>
    </ul>
	</center>
		<form method="POST" action="editPatient.php">
			<h2> Patient Information</h2>
				Name: <input name="patientName" id="patientName" value="<?php echo $row_product['name']; ?>"/> 
				Date of Birth: <input type="date" name="patientDOB" id="patientDOB" value="male"/><br><br>
				Sex: <select name="patientSex" id="patientSex" required> 
					<option value = ""> </option>
					<option value = "male" <?php selectedCheck($row_product["sex"], "male"); ?>> Male </option>
					<option value = "female" <?php selectedCheck($row_product["sex"], "female"); ?>> Female </option>
					<option value = "perferNot" <?php selectedCheck($row_product["sex"], "perferNot"); ?>> Prefer Not To Say </option>
				</select>
				Phone Number: <input type="tel" id="patientPhone" name="patientPhone" value="<?php echo $row_product['phone_num']; ?>"/><br><br>
				<table> 
					<tr>
						<td>
							Emergency Contact:
						</td>
						<td>
							<textarea name="emergencyContact" id="emergencyContact"><?php echo $row_product['em_contact']; ?></textarea> 
						</td>
						<td>
							Address:
						</td>
						<td>
							<textarea name="patientAddress" id="patientAddress"><?php echo $row_product['address']; ?></textarea> 
						</td>
					</tr>
				</table>
				<hr>
			<h2> Family History</h2>
				Does anyone in your family have a history of any of the following:<br><br>
				<table>
					<tr>
						<td>
							
							<input type="checkbox" id="cancer" name="cancer" <?php if($row_product["cancer"] == "1") { echo"checked='true'"; }?> />
							<label for="cancer"> Cancer</label>
						</td>
						<td>
							<input type="checkbox" id="diabetes" name="diabetes" <?php if($row_product["diabetes"] == "1") { echo"checked='true'"; }?> />
							<label for="diabetes"> Diabetes</label>
						</td>
						<td>
							<input type="checkbox" id="highblood" name="highblood" <?php if($row_product["hbloodpress"] == "1") { echo"checked='true'"; }?> />
							<label for="highblood"> High Blood Pressure</label>
						</td>
						<td>
							<input type="checkbox" id="lowblood" name="lowblood" <?php if($row_product["lbloodpress"] == "1") { echo"checked='true'"; }?> />
							<label for="lowblood"> Low Blood Pressure</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" id="heartdisease" name="heartdisease" <?php if($row_product["heartdisease"] == "1") { echo"checked='true'"; }?> />
							<label for="heartdisease"> Heart Disease</label>
						</td>
						<td>
							<input type="checkbox" id="asthma" name="asthma" <?php if($row_product["asthma"] == "1") { echo"checked='true'"; }?> />
							<label for="asthma"> Asthma</label>
						</td>
						<td>
							<input type="checkbox" id="seizure" name="seizure" <?php if($row_product["seizures"] == "1") { echo"checked='true'"; }?> />
							<label for="seizure"> Seizures</label>
						</td>
						<td>
							<input type="checkbox" id="stroke" name="stroke" <?php if($row_product["strokes"] == "1") { echo"checked='true'"; }?> />
							<label for="stroke"> Strokes</label>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td>
							Other:
						</td>
						<td>
							<textarea name="otherHistory" id="otherHistory"><?php echo $row_product['otherhist']; ?></textarea> 
						</td>
					</tr>
				</table>
			<h2> Allergies</h2>
				Do you have allergies to any of the following:<br><br>
				<table>
					<tr>
						<td>
							<input type="checkbox" id="lactose" name="lactose" <?php if($row_product["lactose"] == "1") { echo"checked='true'"; }?> />
							<label for="lactose"> Lactose</label>
						</td>
						<td>
							<input type="checkbox" id="nuts" name="nuts" <?php if($row_product["treenuts"] == "1") { echo"checked='true'"; }?> />
							<label for="nuts"> Tree Nuts</label>
						</td>
						<td>
							<input type="checkbox" id="peanuts" name="peanuts" <?php if($row_product["peanuts"] == "1") { echo"checked='true'"; }?> />
							<label for="peanuts"> Peanuts</label>
						</td>
						<td>
							<input type="checkbox" id="epinephrine" name="epinephrine" <?php if($row_product["epinephrine"] == "1") { echo"checked='true'"; }?> />
							<label for="epinephrine"> Epinephrine</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" id="milk" name="milk" <?php if($row_product["milk"] == "1") { echo"checked='true'"; }?> />
							<label for="milk"> Milk</label>
						</td>
						<td>
							<input type="checkbox" id="eggs" name="eggs" <?php if($row_product["eggs"] == "1") { echo"checked='true'"; }?> />
							<label for="eggs"> Eggs</label>
						</td>
						<td>
							<input type="checkbox" id="wheat" name="wheat" <?php if($row_product["wheat"] == "1") { echo"checked='true'"; }?> />
							<label for="wheat"> Wheat</label>
						</td>
						<td>
							<input type="checkbox" id="fish" name="fish" <?php if($row_product["fish"] == "1") { echo"checked='true'"; }?> />
							<label for="fish"> Fish</label>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td>
							Other:
						</td>
						<td>
							<textarea name="otherAllergies" id="otherAllergies"><?php echo $row_product['otherallg']; ?></textarea> 
						</td>
					</tr>
				</table>
			<h2> Medications and Supplements</h2>
			List all medications you are currently taking &emsp;
			<button type="button" id="addMeds" value="addMeds" onclick="javascript:add('meds', 'medNum');">Add Meds</button>
			<button type="button" id="remMeds" value="remMeds" onclick="javascript:remove('meds', 'medNum');">Remove Meds</button><br>
			&emsp; &emsp;Medication Name &emsp;&emsp; Dosage and Frequency<br>
			<input type="text" id="medNum" class="menu-content" value="<?php echo $row_product['otherallg']; ?>">
			<div id="meds">
			<?php 
				$items = explode(",", $row_product['medication']);
				if (count($items) == 0)
				{
					echo "<script type='text/javascript'> add('meds', 'medNum');";
					echo "document.getElementById('meds').firstChild.innerHTML = 'N/A';";
					echo "document.getElementById('meds').childNodes[1].innerHTML = 'N/A';";
					echo "</script>";
				}
				else
				{
					for ($i = 0; $i < count($items)*2; $i++)
					{
						echo "<script type='text/javascript'> add('meds', 'medNum');";
						echo "document.getElementById('meds').childNodes[i].innerHTML = " . $items[i] . ";";
						$i++;
						echo "document.getElementById('meds').childNodes[i].innerHTML = " . $items . ";";
						echo "</script>";
					}
				}
			?>
			</div>
			<h2> Accidents and Injuries</h2>
			List all recent accidents or other injuries that required medical attention &emsp;
			<button type="button" id="addAcc" value="addAcc" onclick="javascript:add('accs', 'accNum');">Add Accidents</button>
			<button type="button" id="remAcc" value="remAcc" onclick="javascript:remove('accs', 'accNum');">Remove Accidents</button><br>
			 &emsp; &emsp; &emsp;Incident &emsp;&emsp;&emsp;&emsp;&emsp; Date<br>
			<input type="text" id="accNum" class="menu-content">
			<div id="accs">
			<?php 
				$items2 = explode(",", $row_product['incident']);
				if (count($items2) == 0)
				{
					echo "<script type='text/javascript'> add('acc', 'accNum');";
					echo "document.getElementById('acc').firstChild.innerHTML = 'N/A';";
					echo "document.getElementById('acc').childNodes[1].innerHTML = 'N/A';";
					echo "</script>";
				}
				else
				{
					for ($i = 0; $i < count($items2)*2; $i++)
					{
						echo "<script type='text/javascript'> add('acc', 'accNum');";
						echo "document.getElementById('acc').childNodes[i].innerHTML = " . $items2[i] . ";";
						$i++;
						echo "document.getElementById('acc').childNodes[i].innerHTML = " . $items2 . ";";
						echo "</script>";
					}
				}
			?>
			</div>
			<h2> Surguries</h2>
			List all surgeries or other severe hospitalizations &emsp;
			<button type="button" id="addSurg" value="addSurg" onclick="javascript:add('surg', 'surgNum');">Add Surgeries</button>
			<button type="button" id="remSurg" value="remSurg" onclick="javascript:remove('surg', 'surgNum');">Remove Surgeries</button><br>
			&emsp; &emsp; &emsp;Incident &emsp;&emsp;&emsp;&emsp;&emsp; Date<br>
			<input type="text" id="surgNum" class="menu-content">
			<div id="surg">
			<?php 
				$items3 = explode(",", $row_product['surgery']);
				if (count($items3) == 0)
				{
					echo "<script type='text/javascript'> add('surg', 'surgNum');";
					echo "document.getElementById('surg').firstChild.innerHTML = 'N/A';";
					echo "document.getElementById('surg').childNodes[1].innerHTML = 'N/A';";
					echo "</script>";
				}
				else
				{
					for ($i = 0; $i < count($items3)*2; $i++)
					{
						echo "<script type='text/javascript'> add('surg', 'surgNum');";
						echo "document.getElementById('surg').childNodes[i].innerHTML = " . $items3[i] . ";";
						$i++;
						echo "document.getElementById('surg').childNodes[i].innerHTML = " . $items3 . ";";
						echo "</script>";
					}
				}
			?>
			</div>
			<h2> Others</h2>
			List any medical history that has not been mentioned on the form<br>
			<textarea name="history" id="history"><?php echo $row_product['other']; ?></textarea> <br>
			<center>
			<input type="submit" value="submit">
			</center>
		</form>
<center>
    <table align="center">
        <tr>
            <td>
                <img src="img/usericon.png" width="7%"/>
                <br><p style="font-family: monospace;"> Patient Management <p><br>
            </td>
            <td>
                <img src="img/clockicon.png" width="15%"/>
                <br><p style="font-family: monospace;"> Appointment Management <p><br>
            </td>
            <td>
                <img src="img/stethoscopeicon.png" width="25%"/>
                <br><p style="font-family: monospace;"> Doctor Management <p><br>
            </td>
        </tr>
    <p align="center" style="font-family: monospace;"> Hospital Management brought to you by Baker and Callum. <br> Logo From Wikimedia Commons<br> 2024 No Rights Reserved...<p>
<?php
			}
		}
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
		$sql = "UPDATE INTO patient_table (pid, name, dob, sex, phone_num, em_contact, address, cancer, diabetes, hbloodpress, lbloodpress, heartdisease, asthma, seizures, strokes, otherhist, lactose, treenuts, peanuts, epinephrine, milk, eggs, wheat, fish, otherallg, medication, dosage, incident, dateofinc, surgery, dateofsurg, other) 
		VALUES (NULL, '$name', '$dob', '$sex', '$phone_num', '$emergency_contact', '$address', $cancer, $diabetes, $highblood, $lowblood, $heartdisease, $asthma, $seizure, $stroke, '$history', $lactose, $treenuts, $peanuts, $epinephrine, $milk, $eggs, $wheat, $fish, '$otherAllergies', '$medArea', '$doseArea', '$accArea', '$dateAccArea', '$surgArea', '$dateSurgArea', '$other')";
		$connect->query($sql);
		header("Location: main.php");
	}
	}
?>	
</center>
	</body>
</html>