<?php
include 'file_constant.php';
session_start();
mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
mysql_select_db("login") or die ("Couldnt find database");
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("update users set username='$username',password='$password' where id=$id");
if(!$query)
	echo "Error<br />";
else
	header("location:users.php");	
?>