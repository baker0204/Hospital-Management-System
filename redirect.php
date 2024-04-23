<?php
	include ("db_connect.php");
	session_start();
	
	$_SESSION['id']=$_POST['uid'];
	$_SESSION['pwd']=$_POST['pwd'];
	
	$verify = false;
	$sql_product="SELECT * FROM user_table";
	$result_product=$connect->query($sql_product);
	while($row_product = $result_product->fetch_assoc())
	{
		if ($row_product["userid"] == $_SESSION['id'] && $row_product["password"] == $_SESSION['pwd'])
		{
			$verify = true;
			$_SESSION['role'] = $row_product["role"];
			header("Location: main.php");
		}
	}
	if (!$verify)
	{
		echo "Error, invalid credentials";
		header("Location: index.php");
	}

?>