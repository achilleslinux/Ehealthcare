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
				<h1><a href="index.html"></a></h1>
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
			if(!isset($_SESSION['username'])||$_SESSION['isadmin']==1)
			{
				if(!isset($_SESSION['username'])||$_SESSION['isdoc']==0)
				{
		            echo '<li><a href="specialities.php">specialities</a></li>';
					echo '<li><a href="tips.php">tips</a></li>';
				}
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
		header('location:http://localhost/project/index.php');	
	}
	?>
		</ul>
	</div>
	<!-- end #menu -->
    <?php
	
		mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
						mysql_select_db("login") or die ("Couldnt find database");
						$id=$_SESSION['id'];
						
						$query=mysql_query("select * from doctors where id=$id");
						$row=mysql_fetch_assoc($query);
						$fname=$row['fname'];
						$lname=$row['lname'];
						$email=$row['email'];
						$spec=$row['spec'];
						$sex=$row['sex'];						
						$age=$row['age'];
						$quali=$row['quali'];
						$image=$row['image'];
						$about=$row['about'];
	
	?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="index.php">Welcome Dr. <?php echo $lname; ?> !</a></h2>
						<div class="entry">
							<p><?php echo '<div style=" padding-top: 10px; padding-left: 25px; padding-bottom: 10px; margin-top: 30px; margin-right: 25px; float : left; border: 1px solid #F30;"><img src="'.$row['image'].'" width="200" height="200" alt="" class="alignleft border" /></div>';
							 echo "<div id=detail><font color=#F60><i>Name</i> :</font> Dr. ".$fname."&nbsp;".$lname."<p /><p /><font color=#F60><i>Sex</i> :</font> $sex<p /><font color=#F60><i>Age</i> :</font> ";
							
							echo $age."<p /><font color=#F60><i>e-mail</i> :</font> $email<p /><font color=#F60><i>Qualification</i> :</font> $quali<p /><font color=#F60><i>Speciality</i> :</font> $spec</div><p><div id=about><div id=about3><strong><font color=#F60>About Me :</strong></div></font><p /><p /> $about</div></p>";
							$query2=mysql_query('select * from problems where reply="" and did='.$id.' order by probid desc');
							$num=mysql_num_rows($query2);
							if($num==0)
							{
									echo '<div id="about4"><i>You have no new appointments.</i></div>';
							}
							else
							{
								echo '<div id="about4"><div id="about3"><strong><i><u>Your new appointments</u> :-</i></strong></div>';
							while($row2=mysql_fetch_assoc($query2))
							{
								$pid=$row2['pid'];
								$query3=mysql_query("select fname from pat_det where id='$pid'");
								$row3=mysql_fetch_assoc($query3);
								$pname=$row3['fname'];
								$probid=$row2['probid'];
								$img1=$row2['image'];
								echo '<br /><br /><div id="about1"><strong> '.$pname.' </strong>(<i>date : '.$row2['prob_post_date'].'</i>) : '.$row2['prob'].'<br />';
								if($img1!="")
									echo '<center><br /><br /><a href="'.$img1.'" ><img src="'.$img1.'" href="'.$img1.'" height=100 width=100/></a></center>';
								echo '</div><br />';
								echo '<div id="about3"><table cols=3 rows=2><tr><td valign="middle" align="middle"><strong> Reply : </strong></td><form name=f1 action="reply.php" method="POST"><td><textarea name="reply" cols="30" rows="5">Post your reply in not more than 100 characters</textarea> <input type="hidden" name="probid" value='.$probid.'></td> <td><input class="btn btn-primary" type ="submit" value=" Reply "></td></form></tr><tr height="50"><td colspan=3 align="left"><form name=form2 action="history_patient.php" method="POST"><input type="hidden" name="id" value='.$pid.'><input class="btn btn-primary" type ="submit" value=" View History "></form></td></tr></table></div>';
								
							}
							echo '</div>';
							}
							?> </p>
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
		echo '<p><label>User - '.$_SESSION['username'].'</label></p>';
		echo '<a href="logout.php"><u> Logout </u></a>';
	}
	else
	{
		?>
        <h2>Login</h2>
<form name="form1" action="login.php" onsubmit="return validate()" method="POST">
<table cols=2>
<tr>
<td><label>Username : </label></td>
<td><input name="username" type="text" size="20" maxlength="15" align="right"/></td>
</tr>                              
<tr>
<td><label>Password : </label></td>
<td><input type="password" name="password" size="20" maxlength="15"align="right"/></td>
</tr>
    <?php
  
  if(isset($_SESSION['invalid'])&&$_SESSION['invalid']==1)
  {
  	echo '<tr><td colspan=2 align=center><pre>Username and/or password invalid..</pre></td></tr>';
	$_SESSION['invalid']=0;
  }
  else
  {
	  
	echo '<tr><td colspan=2 align=center>&nbsp </td></tr>';  
	  
  }
  ?>

<tr><td><input type="submit" name="submit" value=Login > </td>
<td align=right><a href="register.php" align="right"><u>Register</u></a></td></tr></table>
</form>
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

