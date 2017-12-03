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
				<h1></h1>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.php">Homepage</a></li>
			<li><a href="specialities.php">specialities</a></li>
			<li class="current_page_item"><a href="tips.php">tips</a></li>
			<li><a href="#">Contact</a></li>
            
            <?php
			session_start();
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
						<h2 class="title"><a href="index.php">General Health Tips</a></h2>
						<div class="entry">
							<p>
						
							
							<div id="about"><p>        
            <p><strong><div style=" font-family: 'Segoe Print'; color:#F60; ">When it comes to good health, there's no big secret. Here are 10 things you can do today to improve your health.</div></strong> </p>

<h3>1. Check your weight </h3>
<p>Nearly three in 10 women and four in 10 men in England are overweight. Obesity causes 9,000 premature deaths every year and, on average, reduces life expectancy by nine years. Use our <span style="color:#585858">BMI calculator</span> to find out if you're a healthy weight or whether you're at risk of serious health problems, such as type 2 diabetes, heart disease, and certain cancers. If you need to bring your weight down, you'll find everything you need to know in our lose weight</span> and health and fitness</span> sections or you could try our 12-week weight loss guide.</p>
<h3>2. Drink less </h3>
<p>Most people are unaware that regularly drinking more alcohol than is advised by the NHS can lead to a wide range of long-term health problems, including cancers, strokes, and heart attacks. For example, men who regularly drink more than three to four units a day are three times more likely to have a stroke. Visit our drinking and alcohol</span> section to calculate your drinking levels, read about the health risks of drinking too much, and find out where you can get help.</p>
<h3>3. Eat less salt and fat </h3>
<p>Excessive salt and fat in our diets is a major cause of chronic illnesses such as heart disease, stroke, and diabetes. Too much salt in your food can cause high blood pressure and make you three times more likely to develop heart disease or have a stroke. Two thirds of Britons have too much saturated fat in their diets, putting them at an increased risk of heart disease and stroke. Get tips on cutting your fat and salt intake in <span style="color:#585858">lower your cholesterol</span> and <span style="color:#585858">say no to salt</span>.</p>
<h3>4. Exercise regularly</h3>
<p>The benefits of exercise aren't limited to losing weight. Even if you're slim, you'll still get health benefits from exercising. Even a small amount of regular activity can lower the risk of developing major chronic diseases such as coronary heart disease, stroke, and type 2 diabetes, by up to 50%. Regular exercise can cut the risk of premature death by 20-30%. You'll find plenty of fun and practical ideas to help you get moving in our <span style="color:#585858">health and fitness</span> section.</p>
<h3>5. Eat more fruit and veg </h3>
<p>For a healthy and balanced diet, try to eat five portions of fruit and vegetables a day. Research shows that eating at least 400g of fruit and vegetables a day can lower your risk of serious health problems such as heart disease, stroke, type 2 diabetes, and obesity. Whether you're cooking for a family, eating on the run, or on a tight budget, our tips and recipes can help you get your <span style="color:#585858">5 A DAY</span>.</p>
<h3>6. Keep stress in check </h3>
<p>In 2010/11 around 400,000 people in the UK reported work-related stress at a level they believed was making them ill. Psychological problems, including stress, are the underlying reason for one in five visits to a GP. If left unchecked, stress can lead to further health problems such as high blood pressure, anxiety, and depression. Learn to manage stress better with our top 10 stress busters</span>, advice on good time management</span>, and <span style="color:#585858">relaxation tips</span>.</p>
<h3>7. Improve your sleep </h3>
<p>Nearly everyone has problems sleeping at some point in their life. It's thought that a third of people in the UK have bouts of insomnia. Most healthy adults sleep for an average of seven to nine hours a night. If you're not getting enough sleep, it can affect relationships, your performance at work, and it can delay recovery from illness. Good sleep starts with a good bedtime ritual</span> and some simple lifestyle changes.</p>
<h3>8. Quit smoking </h3>
<p>The health benefits of quitting smoking are immediate. After 20 minutes, your blood pressure and pulse return to normal. After 24 hours, your lungs start to clear. After three days you can breathe more easily, and your energy increases. Keep it up and you're adding years to your life. Research shows that people who quit smoking by the age of 30 add 10 years to their life. For help with quitting, including what your GP can do and nicotine replacement therapies, visit <span style="color:#585858">stop smoking</span>.</p>
<h3>9. Get a sexual health test </h3>
<p>Many people don't notice any symptoms when they have a sexually transmitted infection (STI), such as chlamydia or gonorrhoea. If left untreated, chlamydia can affect a woman's ability to get pregnant. You can't tell by looking at someone whether they've got an infection, so it's important to get a check-up if you've ever had unprotected sex. Getting tested and treated for STIs is easier than you think, and most infections can be cured. Find out more in <span style="color:#585858">visiting an STI clinic</span>.</p>
<h3>10. Check that lump </h3>
<p>One in three people in England is diagnosed with cancer at some time in their life. Cancer usually affects older people, but it can occur at any age. Detecting most cancers early means that treatment is more likely to be successful. Sometimes, noticing a small change, like a lump, changes to a mole, or unexplained weight loss, can make a big difference to your health. For tips on spotting the early signs of cancer, read <span style="color:#585858">cancer symptoms</span>.</p>

        </p>        
</div>

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
		?>
         <h2>Login</h2>
<form name="form1" action="login.php" onsubmit="return validate()" method="POST">
<table cols=2 >
<tr>
<td><label style=" font-family: 'Maiandra GD'; ">Username: </label></td>
<td><input name="username" type="text" size="20" maxlength="15" align="right"/></td>
</tr>                              
<tr>
<td><label style=" font-family: 'Maiandra GD'; ">Password : </label></td>
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

