<?php

session_start();
if($_SESSION['isdoc']==1)
{
	
	header('location:doctor.php');	
	
}
else if($_SESSION['isadmin']==1)
{
	
	header('location:admin.php');	
	
}
else
{
	
	header('location:patient.php');
		
}

?>