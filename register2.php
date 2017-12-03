<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>e-Health Care</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1></h1>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li ><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="contact.php">Contact</a></li>
            
            <?php
			include 'file_constant.php';
			session_start();
    if(isset($_SESSION['username']))
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
							  die();
		
	}
	else
	{
		echo '<li class="current_page_item"><a href="register.php">Register</a></li>';	
	}
	?>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Registration</a></h2>
						<div class="entry">
							<?php

	$username=$_POST['username'];
	$password=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$bg=$_POST['bg'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	
	$flag=0;
	if(!$_POST['fname'])
	{
		echo '<div id="validate">First Name missing .. <br/><br /></div>';
		$flag=1;			
	}
	if(!$_POST['lname'])
	{
		echo '<div id="validate">Last Name missing ..<br/><br /></div>';
		$flag=1;			
	}
	if(!$_POST['bg'])
	{
		echo '<div id="validate">Blood Group missing ..<br/><br /></div>';
		$flag=1;			
	}
	if(!$_POST['username'])
	{
		echo '<div id="validate">Username missing ..<br/><br /></div>';
		$flag=1;			
	}
	if(!$_POST['password'])
	{
		echo '<div id="validate">Password missing ..<br/><br /></div>';
		$flag=1;			
	}
	if($flag==1)
	{
		
		echo '<p><a href="register.php"><u>Click here to return to registration page</u></a></p>';
		
		
	}
			
    else       
	{
	
	mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
	mysql_select_db("login") or die ("Couldnt find database");
	
	$query1=mysql_query("select id from users where username='$username'");
	$row=mysql_fetch_assoc($query1);
	
	if(isset($row['id']))
	{
		
		echo '<p /><div id="validate"><a href="register.php"><u>Click here to go back to registration page</u></a><br 

/>';	
		echo "<br />Username already exists! Try an alternative..</div>";
	}
	else
	{
	mysql_query("insert into users(username,password) values('$username','$password')");
	
	$query2=mysql_query("select id from users where username='$username'");
	$row1=mysql_fetch_assoc($query2);
	$id=$row1['id'];
	mysql_query("insert into pat_det(id,fname,lname,bg,email,sex,dob) values('$id','$fname','$lname','$bg','$email','$sex','$dob')");
	echo 'You have been registered!<br /><br /><a href="index.php">Login</a>';
	}
	}
	?>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						
					  <li>
						<h2>Categories</h2>
						  <ul>
							  <li><a href="index.php">About</a></li>
							  <li><a href="specialities.php">Specialities</a></li>
							  <li><a href="tips.php">Health Tips</a></li>
							  <li><a href="contact.php">Contact Us</a></li>
                              <?php
  						    	  if(isset($_SESSION['username']))
   								  {
    									  echo '<li><a href="profile.php">Profile</a></li>';
												
								  }
							  ?>
						  </ul>
					  </li>
						
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>All rights reserved|Designed by Ohm.</a>.</p>
</div>
<!-- end #footer -->
</body>

