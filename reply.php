<?php
	include 'file_constant.php';
	session_start();
	$reply=$_POST['reply'];
	$probid=$_POST['probid'];
	$date1=date("Y-m-d");
	mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
	mysql_select_db("login") or die ("Couldnt find database");
	$query=mysql_query("update problems set reply='$reply' where probid=$probid");
	$query=mysql_query("update problems set rep_date='$date1' where probid=$probid");
	header("location:doctor.php");
?>