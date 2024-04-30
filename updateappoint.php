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
		$aid = $_POST["aid"] ?? null;
		$sql_product="SELECT * FROM appointment_table";
		$result_product=$connect->query($sql_product);
		while($row_product = $result_product->fetch_assoc())
		{
			if ($row_product["aid"] == $aid)
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
				Name: <input name="patientName" id="patientName" value="<?php echo $row_product['patient_name']; ?>"/> 
				Date of Appointment: <input type="datetime-local" name="appdate" id="appdate" value="<?php echo $row_product['date_time']; ?>"/><br><br>
				Preffered Doctor: <input id="docname" name="docname" value="<?php echo $row_product['doctor_name']; ?>"/><br><br>
                Reasons For Appointment: <textarea name="info" id="info"><?php echo $row_product['info']; ?></textarea><br>
                <center>
                <br><br>
			    <input type="submit" value="submit">
			    </center>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
    	</table>
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
		}
?>
</center>
</body>
</html>
