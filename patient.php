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
			 <?php
			 include 'file_constant.php';
			session_start();
			if(!isset($_SESSION['username'])||strcasecmp($_SESSION['username'],"admin"))
			{
				if(!isset($_SESSION['username'])||$_SESSION['isdoc']==0)
		            echo '<li><a href="specialities.php">specialities</a></li>';
				echo '<li><a href="tips.php">tips</a></li>';
			}
			?>
			<li><a href="#">Contact</a></li>
            
            <?php
			
			
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
                    <?php
                    	mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
						mysql_select_db("login") or die ("Couldnt find database");
						$id=$_SESSION['id'];
						
						$query=mysql_query("select * from pat_det where id='$id'");
						$row=mysql_fetch_assoc($query);
						$fname=$row['fname'];
						$lname=$row['lname'];
						$email=$row['email'];
						$bg=$row['bg'];
						$sex=$row['sex'];						
						$dt=$row['dob'];
						echo "<h2 class=title>Welcome $fname !</h2>";
                    
						
						echo "<div class=entry>";
							echo "<div id=about><font color=#F60><i>Name </i>:</font> $fname $lname <p /><font color=#F60><i>Sex </i>:</font> $sex<p /><font color=#F60><i>Age</i> :</font>  ";
							$age = strtotime(date("Y-m-d")) - strtotime($dt);
							$age = round( $age/30758400);
							echo $age."<p /><font color=#F60><i>e-mail</i> :</font> $email<p /><font color=#F60><i>Blood Group </i> :</font> $bg</div>";
							?>
                            <div id="innerlink3"><br /></div>
                            <div id="innerlink3"><br /></div>

<div id="innerlink1"><a href="specialities.php">Click here to view our doctors, and post your problem</a></div>

<div id="innerlink2"><a href="historyuser.php">Click here to view your history</a></div>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
                        <?php
						if(isset($_SESSION['username']))
    {
    						  echo '<h2 >welcome</h2>';
		echo '<p><label>Username  :  '.$_SESSION['username'].'</label></p>';
		echo '<a href="logout.php"><u> Logout </u></a>';
	}
	else
	{
		header('location:index.php');
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
							  <li><a href="#">Contact Us</a></li>
                              
                              <?php
    if(isset($_SESSION['username']))
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
							  echo '<li><a href="historyuser.php">History</a></li>';
		
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

