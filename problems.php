<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>

	function confirm1()
	{
			var r=confirm("If you want to delete this problem press \"Ok\" otherwise press \"Cancel\" ");
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
			<li><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			
            
            <?php
			include 'file_constant.php';
			session_start();
    if(isset($_SESSION['username']))
    {
		if($_SESSION['isadmin']==0)
			header('location:index.php');	
   	    echo '<li class="current_page_item"><a href="profile.php">Profile</a></li>';
		
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
					 </div>
					
                    <div style="clear: both;">&nbsp;</div>
                    <a href="http://localhost/project/admin.php">&laquo;Back</a>
					 <center><font color="#FF9F04"><h3>problems</h3></font>
                     <?php
					 
					 	mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
						mysql_select_db("login") or die ("Couldnt find database");
						
						$query=mysql_query("select * from problems");					 
					 ?>
                     <table cols="8" cellpadding="10">
                     <tr>
                     <th>probid</th>
                     <th>pid</th>
                     <th>did</th>
                     <th>prob</th>
                     <th>reply</th>
                     <th>post_date</th>
                     <th>rep_date</th>
                     <th></th>
                     </tr>
                     <?php
					 while($row=mysql_fetch_assoc($query))
					 {
						 ?>
                     <tr>
                     <td> <?php echo $row['probid']; ?></td>
                     <td> <?php echo $row['pid']; ?></td>
                     <td> <?php echo $row['did']; ?></td>
                     <td> <?php echo $row['prob']; ?></td>
                     <td> <?php echo $row['reply']; ?></td>
                     <td> <?php echo $row['prob_post_date']; ?></td>
                     <td> <?php echo $row['rep_date']; ?></td>
                     <td> 	<a href="delete_problems.php?id=<?php echo $row['probid']; ?>" onClick="return confirm1()">delete</a>
                     </td>
                     </tr>
                      <?
					 }
					 ?>
                     </table>
                     </center>
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

