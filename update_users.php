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
					 <center><font color="#FF9F04"><h3>users</h3></font>
                     <?php
					 
					 	mysql_connect($host,$uname,$pass) or die("Couldnt connect to database. Error : ".mysql_error());
						mysql_select_db("login") or die ("Couldnt find database");
						
						$query=mysql_query("select * from users where isadmin=0");					 
					 ?>
                     <table cols="6" cellpadding="2">
                     <tr>
                     <th>id</th>
                     <th>username</th>
                     <th>password</th>
                     <th>isdoc</th>
                     <th>isadmin</th>
                     <th></th>
                     </tr>
                     <?php
					 while($row=mysql_fetch_assoc($query))
					 {
						 if(isset($_GET['id'])&&$_GET['id']==$row['id'])
						 {
							 $id=$_GET['id'];
							 								 
						 ?>
                         
                         <form method="post" action="up2.php">
                         <tr>
                     <td> <input type="hidden" name="id" value=<?php echo $row['id']; ?> /><?php echo $row['id']; ?></td>
                     <td> <input type="text" size="10" name="username" value="<?php echo $row['username']; ?>" /></td>
                     <td> <input type="text" size="10" name="password" value="<?php echo $row['password']; ?>" /></td>
                     <td> <?php echo $row['isdoc']; ?></td>
                     <td> <?php echo $row['isadmin']; ?></td>
                     <td> <input type="submit" value="update" /></td>
                     </tr>
                     </form>
                     <?php
						 }
						 else
						 {
					?>
                     <tr>
                     <td> <?php echo $row['id']; ?></td>
                     <td> <?php echo $row['username']; ?></td>
                     <td> <?php echo $row['password']; ?></td>
                     <td> <?php echo $row['isdoc']; ?></td>
                     <td> <?php echo $row['isadmin']; ?></td>
                     <td> <a href="update_users.php?id=<?php echo $row['id']; ?>">update</a></td>
                     </tr>
                      <?
					 }
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

