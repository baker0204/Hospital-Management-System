<html>
<?php
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
?>
	<head>
		<title>St. Athanasius New Patient File</title>
		
		<link rel="stylesheet" href="css/css.css"/>
			
		<script type="text/javascript" src="js/js.js"> </script>
	</head>
<body bgcolor="#eceff4" >
	<center>
    <img src="img/staroflife.png" width="10%">
    <br>
    <h1 align="center"> St. Athanasius Hospital </h1>
    <ul>
        <li class="menu-item"><a href="#" class="drp"> Appointment Management </a>
            <div class="menu-content">
                <a href="newappoint.php">New Appointment</a><br>
                <a href="updateappoint.php">Update Appointment</a><br>
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
                <a href="adduser.php">Add Doctor</a><br>
                <a href="removeuser.php">Remove Doctor</a><br>
                <a href="displayusers.php">Display all Doctors</a><br>
            </div>
        </li>
    </ul>
</center>
		<form method="POST" action="addPatient.php">
			<h2> Patient Information</h2>
				Name: <input name="patientName" id="patientName"/> 
				Date of Birth: <input type="date" name="patientDOB" id="patientDOB"/><br><br>
				Sex: <select name="patientSex" id="patientSex" required> 
					<option value = ""> </option>
					<option value = "male"> Male </option>
					<option value = "female"> Female </option>
					<option value = "perferNot"> Prefer Not To Say </option>
				</select>
				Phone Number: <input type="tel" id="patientPhone" name="patientPhone"/><br><br>
				<table> 
					<tr>
						<td>
							Emergency Contact:
						</td>
						<td>
							<textarea name="emergencyContact" id="emergencyContact"></textarea> 
						</td>
						<td>
							Address:
						</td>
						<td>
							<textarea name="patientAddress" id="patientAddress"></textarea> 
						</td>
					</tr>
				</table>
				<hr>
			<h2> Family History</h2>
				Does anyone in the patients' family have a history of any of the following:<br><br>
				<table>
					<tr>
						<td>
							<input type="checkbox" id="cancer" name="cancer">
							<label for="cancer"> Cancer</label>
						</td>
						<td>
							<input type="checkbox" id="diabetes" name="diabetes">
							<label for="diabetes"> Diabetes</label>
						</td>
						<td>
							<input type="checkbox" id="highblood" name="highblood">
							<label for="highblood"> High Blood Pressure</label>
						</td>
						<td>
							<input type="checkbox" id="lowblood" name="lowblood">
							<label for="lowblood"> Low Blood Pressure</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" id="heartdisease" name="heartdisease">
							<label for="heartdisease"> Heart Disease</label>
						</td>
						<td>
							<input type="checkbox" id="asthma" name="asthma">
							<label for="asthma"> Asthma</label>
						</td>
						<td>
							<input type="checkbox" id="seizure" name="seizure">
							<label for="seizure"> Seizures</label>
						</td>
						<td>
							<input type="checkbox" id="stroke" name="stroke">
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
							<textarea name="otherHistory" id="otherHistory"></textarea> 
						</td>
					</tr>
				</table>
			<h2> Allergies</h2>
				Does the patient have allergies to any of the following:<br><br>
				<table>
					<tr>
						<td>
							<input type="checkbox" id="lactose" name="lactose">
							<label for="lactose"> Lactose</label>
						</td>
						<td>
							<input type="checkbox" id="nuts" name="nuts">
							<label for="nuts"> Tree Nuts</label>
						</td>
						<td>
							<input type="checkbox" id="peanuts" name="peanuts">
							<label for="peanuts"> Peanuts</label>
						</td>
						<td>
							<input type="checkbox" id="epinephrine" name="epinephrine">
							<label for="epinephrine"> Epinephrine</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" id="milk" name="milk">
							<label for="milk"> Milk</label>
						</td>
						<td>
							<input type="checkbox" id="eggs" name="eggs">
							<label for="eggs"> Eggs</label>
						</td>
						<td>
							<input type="checkbox" id="wheat" name="wheat">
							<label for="wheat"> Wheat</label>
						</td>
						<td>
							<input type="checkbox" id="fish" name="fish">
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
							<textarea name="otherAllergies" id="otherAllergies"></textarea> 
						</td>
					</tr>
				</table>
			<h2> Medications and Supplements</h2>
			List all medications patient is currently taking &emsp;
			<button type="button" id="addMeds" value="addMeds" onclick="add('meds')">Add Meds</button>
			<button type="button" id="remMeds" value="remMeds" onclick="remove('meds', 'medNum')">Remove Meds</button><br>
			&emsp; &emsp;Medication Name &emsp;&emsp; Dosage and Frequency<br>
			<input type="text" id="medNum"/>
			<div id="meds">
			</div>
			<h2> Accidents and Injuries</h2>
			List all recent accidents or other injuries that required medical attention &emsp;
			<button type="button" id="addAcc" value="addAcc" onclick="javascript:add('accs', 'accNum');">Add Accidents</button>
			<button type="button" id="remAcc" value="remAcc" onclick="javascript:remove('accs', 'accNum');">Remove Accidents</button><br>
			 &emsp; &emsp; &emsp;Incident &emsp;&emsp;&emsp;&emsp;&emsp; Date<br>
			<input type="text" id="accNum" class="menu-content">
			<div id="accs">
			</div>
			<h2> Surguries</h2>
			List all surgeries or other severe hospitalizations &emsp;
			<button type="button" id="addSurg" value="addSurg" onclick="javascript:add('surg', 'surgNum');">Add Surgeries</button>
			<button type="button" id="remSurg" value="remSurg" onclick="javascript:remove('surg', 'surgNum');">Remove Surgeries</button><br>
			&emsp; &emsp; &emsp;Incident &emsp;&emsp;&emsp;&emsp;&emsp; Date<br>
			<input type="text" id="surgNum" class="menu-content">
			<div id="surg">
			</div>
			<h2> Others</h2>
			List any medical history that has not been mentioned on the form<br>
			<textarea name="history" id="history"></textarea> <br>
			<center>
			<input type="submit" value="submit">
			</center>
		</form>
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
?>
	</body>
</html>
