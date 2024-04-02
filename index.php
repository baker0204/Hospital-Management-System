<html>
	<head>
		<title>Login</title>
		
		<link rel="stylesheet" href="css/css.css"/>
			
		<script type="text/javascript" src="js/js.js"> </script>
	</head>

	<body>
	<form id="login" method="POST" action="redirect.php">
		<table border=0 width=25%>
			<tr><td>Username:</td><td><input type="text" name="userid" id="id"/></td></tr>
			<tr><td>Password:</td><td><input type="password" name="pwd" id="pwd" /></td></tr>
			<tr><td></td><td><input type="submit" value="Login" />    <input type="button" value="Reset" onclick="clearForm('login')"/></td></tr>
		</table>
	</form>
	</body>
</html>