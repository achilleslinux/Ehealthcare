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
				<h1>&nbsp;</h1>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
            <?php
			session_start();
			if(!isset($_SESSION['username'])||$_SESSION['isdoc']==0)
		        {
				    echo '<li><a href="specialities.php">specialities</a></li>';
					echo '<li><a href="tips.php">tips</a></li>';
				}
			
			?>
			<li><a href="#">Contact</a></li>
            
            <?php
			//session_start();
    if(isset($_SESSION['username']))
    {
    		echo '<li><a href="profile.php">Profile</a></li>';
			echo '<li><a href="logout.php">Logout</a></li>';
		
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
						<h2 class="title"><a href="index.php">Welcome to e-Health Care</a></h2>
						<div class="entry">
							<p><img src="images/url.jpg" width="200" height="200" alt="" class="alignleft border" />Welcome to e-Health Care.The goal of the <strong>E-HEALTH CARE SYSTEM</strong> is to  allow patients or other people to get easy access to doctors of different fields at one single place. This is mostly beneficial to patients in rural or sub-urban regions where there is limited access to well qualified doctors. Also to improve the efficiency of the healthcare system by reducing the overall time and cost used to create documents and retrieve information.
</p>

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
<table cols=2 >
<tr>
<td><label style=" font-family: 'Maiandra GD'; "><span>Username:</span> </label></td>
<td><input name="username" type="text" size="20" maxlength="15" align="right"/></td>
</tr>                              
<tr>
<td><label style=" font-family: 'Maiandra GD'; "><span> Password  :</span> </label></td>
<td ><input type="password" name="password" size="20" maxlength="15"align="right"/></td>
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

<tr height="50"><td align="left"><input class="btn btn-primary" type="submit" name="submit" value=Login > </td>
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

