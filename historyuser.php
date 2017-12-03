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
						echo "<h2 class=title>$fname's History :</h2>";
                    
						
						echo "<div class=entry>";
							
							?>
                            
</p>
<?php

		mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
		mysql_select_db("login") or die ("Couldnt find database");
		$query2=mysql_query("select * from problems where pid=$id order by probid desc");
		$num=mysql_num_rows($query2);
		if($num==0)
		{
			echo '<br /><br /> <i>You have no history ..</i><br />';
		}
		else
		{
			while($row2=mysql_fetch_assoc($query2))
			{
				$probid=$row2['probid'];
				$query3=mysql_query("select did from problems where probid=$probid");
				$row3=mysql_fetch_assoc($query3);
				$did1=$row3['did'];
				$query4=mysql_query("select lname from doctors where id=$did1");
				$row4=mysql_fetch_assoc($query4);
				$reply=$row2['reply'];
				$img1=$row2['image'];
				if($reply=="")
					$reply=" No reply";
				$rep_date=$row2['rep_date'];
				if($rep_date=="")
					$rep_date="No date";
		echo '<div id="about"><strong> Me </strong>(<i>date : '.$row2['prob_post_date'].'</i>) : '.$row2['prob'];
		if($img1!="")
									echo '<center><br /><br /><a href="'.$img1.'" ><img src="'.$img1.'" height=100 width=100/></a></center>';
									echo '</div>';
								echo '<div id="about1"><strong> Dr.'.$row4['lname'].' </strong>(<i>date : '.$rep_date.'</i>) : '.$reply.'</div>';

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

