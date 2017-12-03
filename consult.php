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
<?php
include 'file_constant.php';
session_start();
if(!isset($_SESSION['username']))
	header('location:index.php');

?>
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
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="#">Contact</a></li>			
    		<li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
		
		</ul>
	</div>
	<!-- end #menu -->
    <?php
	$pid=$_SESSION['id'];
	$did=$_POST['id'];
	mysql_connect($host,$uname,$pass) or die('couldn\'t connect to database. Error : '.mysql_error());
	mysql_select_db('login');
	$query1=mysql_query("select fname from pat_det where id='$pid'");
	$query2=mysql_query("select * from doctors where id='$did'"); 
	$rowpat=mysql_fetch_assoc($query1);
	$rowdoc=mysql_fetch_assoc($query2);
	$age=$rowdoc['age'];
	
	$spec=$rowdoc['spec'];
	$quali=$rowdoc['quali'];
	
	?>
    
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
                    <?php
						echo '<h2 class="title"><a href="#">Hello '.$rowpat['fname'].'!</a></h2>';
						?>
						<div class="entry">
                        <p>
							<?php
							$about=$rowdoc['about'];
                            echo '<div style=" padding-top: 10px; padding-left: 25px; padding-bottom: 10px; margin-right: 25px; float : left; border: 1px solid #F30;"><img src="'.$rowdoc['image'].'" width="200" height="200" alt="" class="alignleft border" /></div>';
							echo '<div id="detail"><div style=" font-family: Magneto; ">Details :</div><p />';
							echo '<font color=#F60><i>Name</i> :</font> Dr. '.$rowdoc['fname'].' '.$rowdoc['lname'].'<br />';
							echo '<font color=#F60><i>Sex</i> :</font> '.$rowdoc['sex'].'<br />';
							echo '<font color=#F60><i>Age</i> :</font> ';
							echo $age."<br /><font color=#F60><i>Qualification</i> :</font> $quali<br /><font color=#F60><i>Speciality</i> :</font> $spec</div><p><div id=about><div id=about3><strong><font color=#F60>About Me :</strong></div></font><p /><p /> $about</div></p>";
							
							if(!isset($_POST['problem']))
							{
							?>
                            

<br /><br /><div id="detail2">
<p /><i>State your problem here :</i>
<form name=prob action="consult.php" method="post" enctype="multipart/form-data">

<textarea name="problem"cols="30" rows="10">Please limit your problem to 150 characters.</textarea><br />
<?php
echo '<input type="hidden" name="id" value='.$rowdoc['id'].' />';
?>
<br />
<i>You can upload image of your symptoms if you want : </i><br /><input type="file" name="file" /><br /><br />
<br />
<div class="abc"><input class="btn btn-primary"type="submit" value=" POST " /></form></div>

</form></div>
<?php
							}
							else
							{
								
								$prob=$_POST['problem'];
								if(isset($_FILES['file']['name']))
								{
								$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < (10000000))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    
    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      
	  $imgname='images/'.$_FILES["file"]["name"];
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
      $imgname='images/'.$_FILES["file"]["name"];
      }
    }
  }
  else
	{  
		$imgname="";
	}
								}
								else
								{
									
									$imgname="";
									echo "File not recieved.<br /></div>";
								}
								
								$dt=date("Y-m-d");
								mysql_query("insert into problems(pid,did,prob,prob_post_date,image) values('$pid','$did','$prob','$dt','$imgname')"); 	
								echo '<div id="about1">';
								echo '<p><i>Your problem has been posted .. Check in shortly to view my reply .. Take Care ..</i></p></div>';
							}
							?>
                            </p>
                            </p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
                       <h2 >welcome</h2>
                       <?php
		echo '<p><label>User - '.$_SESSION['username'].'</label></p>';
		
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

