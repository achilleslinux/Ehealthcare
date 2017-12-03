<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>e-Health Care</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
	function validate()
	{
		var x=document.forms["form1"]["username"].value;
		var y=document.forms["form1"]["password"].value;		
		if(x==null||y==null||x==""||y=="")	
		{
			alert('Username and/or password missing');
			return false;	
			//window.location='./index.php';
		}
	}
</script>
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
			<li class="current_page_item"><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="#">Contact</a></li>
            
            <?php
			include 'file_constant.php';
			session_start();
    if(isset($_SESSION['username']))
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
							  echo '<li><a href="logout.php">Logout</a></li>';
							  if($_SESSION['isdoc']==1)
							  	header('location:index.php');
		
	}
	else
	{
		echo '<li><a href="register.php">Register</a></li>';	
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
						<h2 class="title"><a href="#">Our Doctors</a></h2>
						<div class="entry">
							                     
                            <table cols=5 align="center" cellpadding="10" cellspacing="0">
                            <tr cellspacing="2">
                            <th >Profile Image</th>
                            <th >Name</th>
                            <th >Sex</th>
                            <th >Speciality</th>
                            <th >Contact Mode</th>
                            </tr>
                            
                            <?php
							mysql_connect($host,$uname,$pass) or die('couldn\'t connect to database. Error : '.mysql_error());
							mysql_select_db('login');
							$query=mysql_query("select id,fname,lname,spec,image,sex from doctors");
							$i=0;
                            while($row=mysql_fetch_assoc($query))
							{
								$i=$i+1;
								$image=$row['image'];
								$fname=$row['fname'];
								$lname=$row['lname'];
								$sex=$row['sex'];
								$spec=$row['spec'];
								$id=$row['id'];
								if($i%2==0)
									echo '<tr bgcolor="#D9EAEA">';
								else
									echo '<tr>';
								echo '<td align=center ><img src="'.$image.'" width="79" height="79"\></td>';
								echo '<td>Dr. '.$fname.' '.$lname.'</td>';
								echo '<td>'.$sex.'</td>';
								echo '<td>'.$spec.'</td>';
								if(!isset($_SESSION['username']))
									echo '<td align="center"><a href="register.php">Register and Consult</a></td>';
								
								else
									echo '<td align=center><form name="form1" action="consult.php" method="POST"><input type="hidden" name=id value='.$id.' /><input class="btn btn-primary" type="submit" value="Consult Now"></form></td>';
								echo '</tr>';
								
							}
							?>
								</table>
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
		echo '<p><label>User  -  '.$_SESSION['username'].'</label></p>';
		echo '<a href="logout.php"><u> Logout </u></a>';
	}
	else
	{
		?>
        <h2>Login</h2>
<form name="form1" action="login.php" onsubmit="return validate()" method="POST">
<table cols=2>
<tr><td width="20">Username:</td>
<td><input name="username" type="text" size="20" maxlength="15" align="right"/></td></tr>                              
<tr>
<td><label>Password:</label></td>
<td><input type="password" name="password" size="20" width="20" maxlength="14"align="right"/></td>
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

<tr height="50"><td><input class="btn btn-primary" type="submit" name="submit" value=Login > </td>
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

