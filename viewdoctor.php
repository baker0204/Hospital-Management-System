<!DOCTYPE html>
<html>
<?php
	include ("db_connect.php");
	session_start();
	$roles = array("A", "D");
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
    <title>Hospital Manager</title>
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
	<h1> All Patients </h1>
	<table style="border:1px solid black;">
		<th> Name </th>
		<th> Sex </th>
		<th> Specialty </th>
		<th> Address </th>
		<th> Email </th>
		<th> Phone Number </th>
		
	 <?php
		$i = 0;
		$sql_product="SELECT * FROM doctor_table";
		$result_product=$connect->query($sql_product);
		while($row_product = $result_product->fetch_assoc())
		{
	?>
			<tr style="border-top:1px solid black;">
				<td style="border-right:1px solid black;"> <?php echo $row_product["name"]?> </td>
				<td style="border-right:1px solid black;"> <?php echo $row_product["sex"]?> </td>
				<td style="border-right:1px solid black;"> <?php echo $row_product["specialty"]?> </td>
				<td style="border-right:1px solid black;"> <?php echo $row_product["address"]?> </td>
				<td style="border-right:1px solid black;"> <?php echo $row_product["email"]?> </td>
				<td style="border-right:1px solid black;"> <?php echo $row_product["phone_num"]?> </td>
				<td>
					<form method="POST" action="updatedoctor.php"> 
						<input id="did" name="did" type="text" style="display:none;" value="<?php echo $row_product['did']?>"/>
						<input type="submit" value="Update Doctor"/>
					</form>
				</td>
			</tr>
	<?php
		}
	?>
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
?>
</center>
</body>
</html>
