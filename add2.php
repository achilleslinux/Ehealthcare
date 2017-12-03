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
				<h1><a href="#"></a></h1>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="#">Contact</a></li>
            
            <?php
			include 'file_constant.php';
			session_start();
    if(isset($_SESSION['username']))
    {
    						  echo '<li class="current_page_item"><a href="profile.php">Profile</a></li>';
							  echo '<li><a href="logout.php">Logout</a></li>';
		
	}
	else
	{
		header('location:index.php');	
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
						<h2 class="title"><a href="#">Adding a new Doctor</a></h2>
						<div class="entry">
							<?php

	$username=$_POST['username'];
	$password=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$qualification=$_POST['ql'];
	$email=$_POST['email'];
	$speciality=$_POST['sp'];
	$age=$_POST['age'];
	$about=$_POST['about'];
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
	if(!$_POST['ql'])
	{
		echo '<div id="validate">Qualifications missing ..<br/><br /></div>';
		$flag=1;			
	}
	if(!$_POST['sp'])
	{
		echo '<div id="validate">Speciality missing ..<br/><br /></div>';
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
		
		echo '<p><a href="add.php"><u>Click here to add a new doctor!</u></a></p>';
		
		
	}
			
    else       
	{
	
	$connect = mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
	mysql_select_db("login") or die ("Couldnt find database");
	
	$query1=mysql_query("select id from users where username='$username'");
	$row=mysql_fetch_assoc($query1);
	
	if(isset($row['id']))
	{
		
		echo '<p /><a href="add.php"><u>Click here to go back to add a new Doctor</u></a><br />';	
		echo "Username already exists! Try an alternative..";
	}
	else
	{
		$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < (160*160*3))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	$imgname="";
    }
  else
    {
    
    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	  $imgname='images/'.$_FILES["file"]["name"];
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
      $imgname='images/'.$_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  $imgname="";
  }
		mysql_query("insert into users(username,password) values('$username','$password')");
		$query2=mysql_query("select id from users where username='$username'");
		$row2=mysql_fetch_assoc($query2);
		$id=$row2['id'];
	mysql_query("insert into doctors(id,fname,lname,sex,email,quali,spec,image,age,about) values('$id','$fname','$lname','$sex','$email','$qualification','$speciality','$imgname','$age','$about')");
	
	mysql_query("update users set isdoc=1 where username='$username'");
	
	echo 'New Doctor\'s details has been successfully added!';
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
							  <li><a href="add.php">ADD</a></li>
							  <li><a href="update2.php">Update</a></li>
							  <li><a href="delete.php">Delete</a></li>
							  <li><a href="#">Contact Us</a></li>
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

