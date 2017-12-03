<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>e-Health Care</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>

	function confirm1()
	{
			var r=confirm("If you want to delete this doctor press \"Ok\" otherwise press \"Cancel\" ");
			return r;
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
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="contact.php">Contact</a></li>
            
            <?php
			include 'file_constant.php';
			session_start();
    if(isset($_SESSION['username']))
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
		
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
					  <h2 class="title">Please select the name of Doctor to be deleted: </h2>
					  <p class="title">&nbsp;</p>
					  <?php
					  		
                           mysql_connect($host,$uname,$pass) or die('couldn\'t connect '.mysql_error());
                           mysql_select_db('login');
                           $q=mysql_query('select id,fname,lname from doctors');
                           while($row=mysql_fetch_assoc($q))
                     {
					
					 
	                  echo '<form name="form1" action="delete1.php" onsubmit="return confirm1()" method="post">';echo "Dr.".$row['fname']."&nbsp;&nbsp".$row['lname'].'&nbsp;&nbsp;&nbsp;<input type="submit" value="Delete" />';
	  
	    
    echo "<input type=hidden name=id value= ".$row['id']." />";?>
	    
	    
	  <p>&nbsp;  </p>
	</form>
    <p />
    <?php
}
?>
	            		
					</div>
					<ul>
					  <br />
					 </ul>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
                        <?php
						if(isset($_SESSION['username']))
    {
    						  
		echo '<p><label>Username  :  '.$_SESSION['username'].'</label></p>';
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
							  <li><a href="add.php">Add</a></li>
							  <li><a href="update2.php">Update</a></li>
							  <li><a href="tips.php">Health Tips</a></li>
							  <li><a href="contact.php">Contact Us</a></li>
                              <?php
    if(isset($_SESSION['username'])&&$_SESSION['isadmin']==1)
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
		
	}
	else
		header('location:index.php'); 
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

