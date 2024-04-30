<?php
	$connect = new mysqli("localhost", "root", "", "hms_table");
	
		if($connect->connect_errno )
		{
			die('Could not connect: ' . $connect->connect_errno);
		}
		function selectedCheck($value1,$value2)
	   {
		   if ($value1 == $value2) 
			{
				echo 'selected="selected"';
			} 
			else 
			{
			  echo '';
			}
			return;
	   }
?>