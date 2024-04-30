<!DOCTYPE html>
<html>
<?php
    include ('db_connect.php');
	session_start();
	$roles = array("A", "P", "D");
	if(!in_array($_SESSION['role'], $roles)) //everyone who has been verified can access this page
	{
		echo "You do not have permission to access this page or you are not properly logged in. <a href='index.php' >Login Again</a> ";
		session_destroy();
		header('location: index.php');
	}
	else
	{
?>
<head>
    <title>New Appointment</title>
    <link rel="stylesheet" href="css/css.css"/>
    <!--<script type="text/javascript" src="js/js.js"></script>-->
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
<center>
<form method="post" action="apptDB.php">
        <h2 style="font-family: monospace;"> Appointment Information</h2>
				Name: <input name="patientName" id="patientName"/> 
				Date of Appointment: <input type="datetime-local" name="appdate" id="appdate"/><br><br>
				Preffered Doctor: <input id="docname" name="docname"/><br><br>
                Reasons For Appointment: <textarea name="info" id="info"></textarea><br>
                <center>
                <br><br>
			    <input type="submit" value="submit">
			    </center>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <p align="center" style="font-family: monospace;"> Hospital Management brought to you by Baker and Callum. <br> Logo From Wikimedia Commons<br> 2024 No Rights Reserved...<p>
<?php
	}
?>
</center>
</body>
</html>
