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
						<h2 class="title"><a href="#">Doctor has been successfully deleted! </a></h2>
						<p>&nbsp;						</p>
						<div class="entry">
			        <p>

<?php
		include 'file_constant.php';
         mysql_connect($host,$uname,$pass) or die('couldn\'t connect '.mysql_error());
         mysql_select_db('login');
		 session_start();
	$q = $_POST['id'];
	

	 $sql = "Delete from doctors where id='$q'";
	 mysql_query("Delete from users where id='$q'");
	 $result = mysql_query($sql);
	 if($result)
	 
	 {
		 echo "Doctor's id : ".$q;
	 }
?>





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
