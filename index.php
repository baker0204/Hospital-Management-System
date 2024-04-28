<html>
<?php
	session_start();
	if(($_SESSION['role'] == "I"))
	{
		?>
		<script type="text/javascript"> alert("Invalid Login, Try Again"); </script>
		<?php
	}
	$_SESSION['role'] = "";
	?>
	<head>
		<title>St. Athanasius Login</title>
		
		<link rel="stylesheet" href="css/css.css"/>
			
		<script type="text/javascript" src="js/js.js"> </script>
	</head>

	<body bgcolor="#eceff4">
	<center>
	<br>
	<img src="img/staroflife.png" width="10%">
    <br>
    <h1 align="center"> St. Athanasius Hospital </h1>
	<br><br>
	<form id="login" method="POST" action="redirect.php">
		<table border=0 width=25%>
			<tr><td><p style="font-family: monospace;"> Username:</td><td><input type="text" name="uid" id="uid" style="font-family: monospace;"/></td></tr>
			<tr><td><p style="font-family: monospace;">Password:</td><td><input type="password" name="pwd" id="pwd" style="font-family: monospace;"/></td></tr>
			<tr><td></td><td><input type="submit" value="Login" />    <input type="button" value="Reset" onclick="clearForm('login')"/></td></tr>
		</table>
	</form>
	</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<p align="center" style="font-family: monospace;"> Hospital Management brought to you by Baker and Callum. Logo From Wikimedia Commons. 2024 No Rights Reserved...<p>
	</body>
</html>