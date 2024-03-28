<html>
	<head>
		<title>Patient File</title>
		
		<link rel="stylesheet" href="css/css.css"/>
			
		<script type="text/javascript" src="js/js.js"> </script>
	</head>

	<body>
		<center>
		<img src="img/staroflife.png" width="10%">
		</center>
		<h1 align="center"> St. Athanasius Hospital Manager </h1>
		<h4 align="center"> 2000 W. University Street</h3>
		<h4 align="center"> Siloam Springs, Arkansas, 72761</h3>
		<h2> Patient Information</h2>
			Name: <input name="patientName" id="patientName"/> 
			Date of Birth: <input type="date" name="patientDOB" id="patientDOB"/><br><br>
			Sex: <select name="patientSex" id="patientSex" required> 
				<option value = ""> </option>
				<option value = "male"> Male </option>
				<option value = "female"> Female </option>
				<option value = "perferNot"> Perfer Not To Say </option>
			</select>
			Phone Number: <input type="tel" id="patientPhone" name="patientPhone"/><br><br>
			<table> 
				<tr>
					<td>
						Emergency Contact:
					</td>
					<td>
						<textarea name="patientAddress" id="patientAddress"></textarea> 
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
			Does anyone in your family have a history of any of the following:<br><br>
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
						<textarea name="allergies" id="allergies"></textarea> 
					</td>
				</tr>
			</table>
		<h2> Allergies</h2>
			Do you have allergies to any of the following:<br><br>
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
						<textarea name="allergies" id="allergies"></textarea> 
					</td>
				</tr>
			</table>
		<h2> Medications and Supplements</h2>
		List all medications you are currently taking &emsp;<button id="addMeds" value="addMeds" onclick="javascript:add('meds');">Add Meds</button>
		<div id="meds">
			 &emsp; &emsp;Medication Name &emsp;&emsp; Dosage and Frequency<br>
		</div>
		<h2> Accidents and Injuries</h2>
		List all recent accidents or other injuries that required medical attention &emsp;<button id="addAcc" value="addAcc" onclick="javascript:add('accs');">Add Accidents</button>
		<div id="accs">
			 &emsp; &emsp; &emsp;Incident &emsp;&emsp;&emsp;&emsp;&emsp; Date<br>
		</div>
		<h2> Surguries</h2>
		List all surgeries or other severe hospitalizations &emsp;<button id="addAcc" value="addAcc" onclick="javascript:add('surg');">Add Surgeries</button>
		<div id="surg">
			 &emsp; &emsp; &emsp;Incident &emsp;&emsp;&emsp;&emsp;&emsp; Date<br>
		</div>
		<h2> Others</h2>
		List any medical history that has not been mentioned on the form<br>
		<textarea name="history" id="history"></textarea> 
	</body>
</html>
