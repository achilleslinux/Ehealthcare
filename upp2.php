<?php
include 'file_constant.php';
session_start();
mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
mysql_select_db("login") or die ("Couldnt find database");
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bg=$_POST['bg'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$query=mysql_query("update pat_det set id=$id,fname='$fname',lname='$lname',bg='$bg',sex='$sex',dob='$dob',email='$email' where id=$id");
if(!$query)
	echo "Error<br />";
else
	header("location:http://localhost/project/pat_det.php");	
?>