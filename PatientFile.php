<html>
	<head>
		<title>Patient File</title>
		
		<link rel="stylesheet" href="css.css"/>
			
		<script type="text/javascript" src="myjs.js"> </script>
	</head>

	<body>
		<h1 align="center"> Hospital Manager </h1>
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
		<h2> Allergies</h2>
		<h2> Medications and Supplements</h2>
		<h2> Accidents</h2>
		<h2> Surguries</h2>
		<h2> Hospitalizations</h2>
		<h2> Others</h2>
	</body>
</html>