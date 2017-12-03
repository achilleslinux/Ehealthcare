<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="index.html"></a></h1>
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
            
            <?php
			session_start();
    if(isset($_SESSION['username']))
    {
		if($_SESSION['isadmin']==0)
			header('location:index.php');	
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
						<h2 class="title"><a href="index.php">Welcome Administrator ! </a></h2>
						<div class="entry">
						  <p><img src="images/admin.jpg" alt="" class="alignleft border" /></p>
</div>
					<font color="#FF9F04"><h3>What do you want to do?</h3></font> </div>
					<div style="clear: both;">&nbsp;</div>
					 <ul><h3>
					 <li><a href ="add.php">Add a new Doctor.</a></li><br />
					 <li><a href="update2.php">Update details of existing Doctor.</a></li><br />
					 <li><a href="delete.php">Delete a doctor.</a></li><br />
                     <li><a href="#">View tables :</a></li></h3><br />
                     <p><label style=" color: #FF9F04; " >-</label> &nbsp;&nbsp;<a href="users.php">users</a></p>
                     <p><label style=" color: #FF9F04; " >-</label> &nbsp;&nbsp;<a href="pat_det.php">pat_det</a></p>
                     <p><label style=" color: #FF9F04; " >-</label> &nbsp;&nbsp;<a href="problems.php">problems</a></p>
                     </li></h3><br />
					 </ul>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
                        <?php
						if(isset($_SESSION['username']))
    {
    						  echo '<h2 >welcome</h2>';
		echo '<p><label>User  -  '.$_SESSION['username'].'</label></p>';
		echo '<a href="logout.php"><u> Logout </u></a>';
	}
	else
	{
		?>
  
<?php
	}
	?>
<p />
						</li>
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

