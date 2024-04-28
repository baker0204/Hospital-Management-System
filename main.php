<!DOCTYPE html>
<html>
<?php
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
    <title>St. Athanasius Home</title>
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
</center>
</body>
</html>
