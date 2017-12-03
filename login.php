<?php
include 'file_constant.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
if($username&&$password)
{
	
	mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
	mysql_select_db("login") or die ("Couldnt find database");
	$query = mysql_query("select * from users where username='$username'");
	$numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
		
		while($row=mysql_fetch_assoc($query))
		{	
		if($row['password']==$password)
		{
			$_SESSION['isdoc']=$row['isdoc'];
			$_SESSION['isadmin']=$row['isadmin'];
			$_SESSION['username']=$username;
			$_SESSION['id']=$row['id'];
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
		else
		{
			$_SESSION['invalid']=1;
			header('Location: ' . $_SERVER['HTTP_REFERER']);	
		}
		}
							
	}
	else
	{
		
		$_SESSION['invalid']=1;
		header('Location: ' . $_SERVER['HTTP_REFERER']);	
		
	}
}
else
{
	
	$_SESSION['invalid']=1;
	header('Location: ' . $_SERVER['HTTP_REFERER']);
		
}
		
	

?>