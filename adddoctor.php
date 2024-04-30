<!DOCTYPE html>
<html>
<?php
include ("db_connect.php");
session_start();
$roles = array("A");
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
    <title>Add Doctor</title>
</head>
<body>
<head>
    <title>St. Athanasius Doctor Management</title>
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
<center>
<form method="post" action="docDB.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="sex">Sex:</label><br>
    <select name="patientSex" id="patientSex" required> 
		<option value = ""> </option>
		<option value = "male"> Male </option>
		<option value = "female"> Female </option>
		<option value = "perferNot"> Prefer Not To Say </option>
	</select><br>
    <label for="specialty">Specialty:</label><br>
    <input type="text" id="specialty" name="specialty"><br>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="phone_num">Phone Number:</label><br>
    <input type="text" id="phone_num" name="phone_num"><br><br>
    <input type="submit" value="Submit">
</form>
</center>

<?php
}
?>
</body>
</html>
