<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>e-Health Care</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
	var cek = /^[a-zA-Z\ ]+$/;
	function validate_reg()
	{
		
		var un=document.forms["form1"]["username"].value;
		var pw=document.forms["form1"]["password"].value;
		var fn=document.forms["form1"]["fname"].value;	
		var ln=document.forms["form1"]["lname"].value;		
		var bg=document.forms["form1"]["bg"].value;
		var x=document.forms["form1"]["email"].value;
		var dd=document.forms["form1"]["dob"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		
		if(fn==null||fn=="")
		{
			alert("First Name is missing ..");
			return false;
		}
		else if (!cek.test(fn))
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
		else if(dd==null||dd=="")
		{
				alert("DOB is mandatory ..");
				return false;
		}
		else if(bg==null||bg=="")
		{
			alert("Blood Group is mandatory ..");
			return false;
		}
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 	 	{
	  		alert("Not a valid e-mail address");
	 		 return false;
	  	}		
		else if(un==null||un=="")
		{
			alert("Give a Username with which you want to login..");
			return false;
		}
		else if(pw==null||pw=="")
		{
			alert("Password is missing ..");
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
				<h1></h1>
				
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
            <li class="current_page_item"><a href="register.php">Register</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Registration</a></h2>
						<p>&nbsp;						</p>
						<div class="entry">
			        <p>
                    
<form name="form1" action="register2.php" onsubmit="return validate_reg()" method="POST" enctype="multipart/form-data" align="center" >
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
    <td ><label>Sex :*</label></td>
    <td  ><input name="sex" type="radio" value="Male" checked /><span> Male </span></td>
    <td  ><input name="sex" type="radio" value="Female"  /><span> Female </span></td>
    </tr>
    <tr>
    <td><label>Date Of Birth :*</label></td>
    <td><input type="date" name="dob" /></td>
  </tr>
  <tr>
    <td><label>Blood Group :*</label></td>
    <td><select name="bg">
    <option value="" selected>Select a Blood Group</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
                                    
    </select></td>
  </tr>
  <tr>
    <td><label>Email :*</label></td>
    <td colspan="2"><input name="email" type="text" size="30" maxlength="40" /></td>
  </tr>
  
  <tr>
    <td><label>Username :*</label></td>
    <td colspan="2"><input name="username" type="text" size="30" maxlength="15" /></td>
  </tr>
  <tr>
    <td><label>Password :*</label></td>
    <td colspan="2"><input name="password" type="password" size="30" maxlength="15" /></td>
  </tr>
  <tr  height="100">
    <td colspan="2" align="center" valign="middle"><h3>
      <input class="btn btn-primary" name="submit" type="submit" value="  Register  " />    
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
	<p>All rights reserved|Designed by Ohm.</a>.</p>
</div>
<!-- end #footer -->
</body>
