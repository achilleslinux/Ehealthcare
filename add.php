<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>e-Health Care</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
	var cek = /^[a-zA-Z\ \']+$/;
	var cek2 = /^[0-9]+$/;
	function validate_reg()
	{
		var un=document.forms["form2"]["username"].value;
		var pw=document.forms["form2"]["password"].value;
		var fn=document.forms["form2"]["fname"].value;	
		var ln=document.forms["form2"]["lname"].value;		
		var ql=document.forms["form2"]["ql"].value;
		var sp=document.forms["form2"]["sp"].value;
		var x=document.forms["form2"]["email"].value;
		var dd=document.forms["form2"]["age"].value;
		var imag=document.forms["form2"]["file"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		
		if (fn!=""&&!cek.test(fn))
		{
 			alert("First Name should be Only Alphabetic");
  			return false;
		}
		else if(ln==null||ln=="")
		{
			alert("Last Name is missing ..");
			return false;
		}
		else if (!cek.test(ln))
		{
 			alert("Last Name should be Only Alphabetic");
  			return false;
		}
		else if (!cek2.test(dd))
		{
 			alert("Age should be Only Numeric");
  			return false;
		}
		else if(dd==null||dd=="")
		{
				alert("Age is mandatory ..");
				return false;
		}
		else if(ql==null||ql=="")
		{
			alert("Qualification is mandatory ..");
			return false;
		}
		else if(sp==null||sp=="")
		{
			alert("Speciality is mandatory ..");
			return false;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	 	{
	  		alert("Not a valid e-mail address");
	 		 return false;
	  	}		
		else if(un==null||un=="")
		{
			alert("Give a Username with which doctor will login..");
			return false;
		}
		else if(pw==null||pw=="")
		{
			alert("Password is missing ..");
			return false;
		}
		else if(imag==null||imag=="")
		{
			alert("Upload an image please ..");
			return false;
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
			<li><a href="specialities.php">specialities</a></li>
			<li><a href="tips.php">tips</a></li>
			<li><a href="#">Contact</a></li>
            <li class="current_page_item"><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>;
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Adding a new Doctor</a></h2>
						<p>&nbsp;						</p>
						<div class="entry">
			        <p>
                    
<form name="form2" action="add2.php" onsubmit="return validate_reg()" method="POST" enctype="multipart/form-data" align="center">
  <table width="500" border="0" cellspacing="0" cellpadding="20" align="center" cols="3">
  
  <tr>
    <td><label>First Name :*</label></td>
    <td colspan="2"><input name="fname" type="text" size="30" maxlength="15" /></td>
  </tr>
  <tr>
   <td><label>Last Name :*</label></td>
    <td colspan="2"><input name="lname" type="text" size="30" maxlength="15" /></td>
  </tr>
   <tr>
    <td rowspan="2"><label>Sex :*</label></td>
    <td rowspan="1" colspan="2">Male <input name="sex" type="radio" value="Male" checked /></td>
    
    </tr>
    <tr>
    <td rowspan="1" colspan="2">Female <input name="sex" type="radio" value="Female"  /></td>
    </tr>
  <tr>
    <td><label>Qualifications :*</label></td>
    <td><input name="ql" type="text" size="30" maxlength="50" /></td>
  </tr>
  <tr>
    <td><label>Email :*</label></td>
    <td colspan="2"><input name="email" type="text" size="30" maxlength="30" /></td>
  </tr>
  <tr>
    <td><label>Speciality :*</label></td>
    <td colspan="2"><input name="sp" type="text" size="30" maxlength="40" /></td>
  </tr>
  <tr>
    <td><label>Profile Image :*</label></td>
    <td colspan="2" align="center"><input type="file" name="file" id="file"></td>
    
  </tr><tr>
    <td><label>Age :*</label></td>
    <td colspan="2"><input name="age" type="text" size="30" maxlength="20" /></td>
  </tr>
  <tr>
    <td><label>Username :*</label></td>
    <td colspan="2"><input name="username" type="text" size="30" maxlength="15" /></td>
  </tr>
  <tr>
    <td><label>Password :*</label></td>
    <td colspan="2"><input name="password" type="text" size="30" maxlength="15" /></td>
  </tr>
  <tr>
    <td rowspan="5" colspan="1" valign="middle" align="middle"><label>About :*</label></td>
    <td colspan="2" rowspan="5"><textarea name="about" cols="30" rows="5"></textarea></td>
  </tr>
  <tr >
    <td colspan="3" rowspan="1" align="center" valign="middle"><h3>
      <input name="submit" type="submit" value=" ADD  " />    
    </h3></td>    
  </tr>
</table>

<!--<input type="hidden" name="valid" value="0" />
<input type="hidden" name="counter" />-->
</form>

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
								
							  <li><a href="update2.php">Update</a></li>
							  <li><a href="delete.php">Delete</a></li>
							  <li><a href="#">Contact Us</a></li>
                              <?php
							  session_start();
    if(isset($_SESSION['username'])&&$_SESSION['isadmin']==1)
    {
    						  echo '<li><a href="profile.php">Profile</a></li>';
		
	}
	else
		header('location:index.php');
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
	<p>All rights reserved|Designed by Ohm</a>.</p>
</div>
<!-- end #footer -->
</body>
