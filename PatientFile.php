<html>
	<head>
		<title>Patient File</title>
		
		<link rel="stylesheet" href="css.css"/>
			
		<script type="text/javascript" src="myjs.js"> </script>
	</head>

	<body bgcolor="#A8557A">
		<img src="img/staroflife.png" width="10%">
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
			Emergency Contact: <textarea name="patientAddress" id="patientAddress"></textarea> 
			Address: <textarea name="patientAddress" id="patientAddress"></textarea> 
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
		<h2> Allergies</h2>
		<h2> Medications and Supplements</h2>
		<h2> Accidents</h2>
		<h2> Surguries</h2>
		<h2> Hospitalizations</h2>
		<h2> Others</h2>
	</body>
</html>