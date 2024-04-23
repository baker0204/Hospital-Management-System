<?php
	$connect = new mysqli("localhost", "root", "", "hms_table");
	
		if($connect->connect_errno )
		{
			die('Could not connect: ' . $connect->connect_errno);
		}
		
?>