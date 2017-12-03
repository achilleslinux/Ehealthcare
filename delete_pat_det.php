<?php
include 'file_constant.php';
session_start();
mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
mysql_select_db("login") or die ("Couldnt find database");
$id=$_GET['id'];

$query=mysql_query("delete from pat_det where id=$id");
$query2=mysql_query("delete from users where id=$id");
if(!$query||!$query2)
	echo "Error<br />";
else
	header("location:pat_det.php");	
?>