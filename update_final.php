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
			<li><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="contact.php">Contact</a></li>
            <li class="current_page_item"><a href="profile.php">Profile</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Update Done !:</a></h2>
						<p>&nbsp;						</p>
						<div class="entry">
			        <p>
     
							
<?php
    include 'file_constant.php';
	session_start(); 
    mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
	mysql_select_db("login") or die ("Couldnt find database");
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$quali=$_POST['quali'];
	$spec=$_POST['spec'];
	$age=$_POST['age'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$about=$_POST['about'];
	$id=$_POST['id'];
	
	mysql_query("update doctors set fname='$fname',lname='$lname',email='$email',age=$age,quali='$quali',spec='$spec',about='$about' where id=$id");
	mysql_query("update users set username='$username',password='$password' where id=$id");
	$query1=mysql_query("select * from doctors where id=$id");
	$query2=mysql_query("select * from users where id=$id");
	$row1=mysql_fetch_assoc($query1);
	$row2=mysql_fetch_assoc($query2);
	?>
	<ul>

<li><label>First Name: &nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row1['fname'];?></label><br /><br /></li>
<li><label>Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row1['lname'];?></label><br /><br /></li>
<li><label>Age: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row1['age'];?></label><br /><br /></li>
<li><label>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row1['email'];?></label><br /><br /></li>
<li><label>Qualifications: &nbsp;<?php echo $row1['quali'];?></label><br /><br /></li>
<li><label>Speciality:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row1['spec'];?></label><br /><br /></li>
<li><label>username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row2['username'];?></label><br /><br /></li>
<li><label>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row2['password'];?></label><br /><br /></li>
<li><label>About:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo $row1['about'];?></textarea></label><br /><br /></li>	
	
<p /><br />
<table name=t cols="1" align="center">
<tr>
<td align="center"><a href="profile.php"><u>BACK TO PROFILE</u></a></td></tr>
</table>


		</div>
					<!--<div id="validate">
                    
                    </div>-->
                    </div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Categories</h2>
							<ul>
								
							  <li><a href="add.php">Add</a></li>
                              <li><a href="update2.php">Update</a></li>
							  <li><a href="delete.php">Delete</a></li>
							  <li><a href="contact.php">Contact Us</a></li>
                              <?php
    if(isset($_SESSION['username']))
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
		
	}?>
	
							</ul>
						</li>
						<li>
							<h2>&nbsp;</h2>
						</li>
						<li> </li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
                              <div id="footer">
	<p>All rights reserved|Designed by Ohm.</a>.</p>
</div>
<!-- end #footer -->
</body>
