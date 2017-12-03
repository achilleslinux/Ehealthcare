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
						<h2 class="title"><a href="#">Update details  that needs to be updated: </a></h2>
						<p>&nbsp;						</p>
						<div class="entry">
			        <p>

<?php
include 'file_constant.php';
session_start();
$id=$_POST['id'];

mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
	mysql_select_db("login") or die ("Couldnt find database");
	
	$query1=mysql_query("select * from doctors where id=$id");
	$row=mysql_fetch_assoc($query1);
	$query2=mysql_query("select * from users where id='$id'");
	$col=mysql_fetch_assoc($query2);
?>
<form name="update" action="update_final.php"method="post">
<ul>

<li><label>First Name: &nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="fname" value="<?php echo $row['fname'];?>"  size="30" /></label><br /><br /></li>
<li><label>Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="lname" value="<?php echo $row['lname'];?>" size="30" /></label><br /><br /></li>
<li><label>Age: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="age" value="<?php echo $row['age'];?>" size="30"/></label><br /><br /></li>
<li><label>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="email" value="<?php echo $row['email'];?>" size="30"/></label><br /><br /></li>
<li><label>Qualifications: &nbsp;<input type="text" name="quali" value="<?php echo $row['quali'];?>" size="30" /></label><br /><br /></li>
<li><label>Speciality:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="spec" value="<?php echo $row['spec'];?>" size="30" /></label><br /><br /></li>
<li><label>username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="username" value="<?php echo $col['username'];?>" size="30" /></label><br /><br /></li>
<li><label>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="password" value="<?php echo $col['password'];?>" size="30" /></label><br /><br /></li>
<li><label>About:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<textarea name="about" cols="50" rows="8"><?php echo $row['about'];?></textarea></label><br /><br /></li>
<input type="hidden" name="id" value="<?php echo $col['id'];?>" />
</ul>
<input type="submit" value=" Update " />
</form>

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
							  <li><a href="delete.php">Delete</a></li>
							  <li><a href="contact.php">Contact Us</a></li>
                              <?php
    if(isset($_SESSION['username']))
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
		
	}
	else
	{
		if($_SESSION['isadmin']==0)
		header('location:http://localhost/project/index.php');
	}
	?>
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
</div>
<div id="footer">
	<p>All rights reserved|Designed by Ohm.</a>.</p>
</div>
<!-- end #footer -->
</body>
