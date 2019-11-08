<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>Home</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Blueprint: Horizontal Slide Out Menu</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css" />
	<link rel="stylesheet" href="CSS/History.css">
	<link rel="stylesheet" href="CSS/footer.css">
	<script src="JS/SlideOut.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
<div class="container">
			<header class="clearfix">
				<span>Asian Institute of Computer Studies </span>
				<h1>Web Portal</h1>
				
				<nav>
					<a href="home.php?logout='1'" data-info="Log out"><img class="loglogo" src="icons/switch.svg"></a>
				</nav>
				
			</header>
				
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="home.php">Home</a>
							</li>
							<li>
								<a>About AICS</a>
								<ul class="cbp-hssubmenu cbp-hssub-rows">
									<li><a href="History.php"><img src="Pictures/169112.svg" alt="img07"/><span>History</span></a></li>
									<li><a href="MVission.php"><img src="Pictures/mission.svg" alt="img08"/><span>Mission and Vision</span></a></li>
									<li><a href="Facility.php"><img src="Pictures/facility.svg" alt="img09"/><span>Facility</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Database</a>
								<ul class="cbp-hssubmenu">
								<li><a href="Studentdb/index.php"><img src="Pictures/student.svg" alt="img10"/><span>Students' PortalDB</span></a></li>
									<li><a href="Teacherdb/index.php"><img src="Pictures/teacher.svg" alt="img06"/><span>Teachers' PortalDB</span></a></li>
								</ul>
							</li>
							<li><a href="Contact.php">Contact</a></li>
							<li>
							<div class="pcon">
							<div class="textcon">
								<p>You're logged in as <strong><?php echo $_SESSION['username']; ?>!</strong></p>
							</div>
							</div>
							</li>
						</ul>

					</div>
				</nav>
			</div>
		</div>
		<div class="phimg">
  			<center>
			  <img class="hisimg" src="Pictures/history.jpg" alt="">
			</center>
		</div>	
  			<h2 class="text1">History of Asian Institute of Computer Studies</h2>
		
		<div class="context">
		<div class="text">
		<p> "To offer quality yet affordable IT education most especially to deserving students, less-fortunate students."</p>
  		<br>
		<p>
		This has been the noble objective of AICS since the very start of its operation way back in 1996. The vision 
		of Mr. Manuel T. Asis, the late Chairman of the Board and President of AICS, was to give the youth an opportunity
		to learn, and be adept in the field of Information Technology.</p>
		<br>
		<p>
		It was in November of 1996 when the first branch of AICS was opened in Fairview, Quezon City. 
		It offered 2-year courses in Computer Science, Computer Technology, and Computer Secretarial, 
		and other computer-related short programs. As the number of enrollees increased, AICS continued to grow as well, 
		opening numerous branches strategically located within Metro Manila and Luzon.</p>
  		<br>
		  <p>
		In the year 2001, AICS ventured further and started to offer B.S. Computer Science in its Caloocan Branch,
		 a continuing degree course for their 2-year Computer Science graduates. AICS Commonwealth followed suit in 2008.
		  To date, AICS hastwo more B.S. degree programs: B.S. Computer Engineering, a continuing course for its 
		  2-year Computer Technology graduates, and B.S. Entrepreneurship, a continuing course for its 2-year 
		  Business Information Management graduates.</p>
  		<br>
		  <p>
		True to its vision and mission, Asian Institute of Computer Studies continuously opens its doors to the youth,
		 to every student with the desire to learn and finish an education, particularly in the field of Information
		  Technology.Now, after more than two decades in the industry, the school continues to grow and expand,
		   aiming to reach out to more communities, and offer high-quality I.T. education that is affordable to 
		   students from all walks of life.</p>
  		<br>
		  <p>
		AICS upholds its pledge to take part in building a future generation of industry experts, an unending commitment to educate and serve the Filipino youth.</p>
		</div>
		</div>

		



  <footer>
	  <img class="imgl"src="Pictures/Aics.png" style>
  </footer>
  <div class="content">
				<!-- notification message -->
				<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
					</h3>
				</div>
				<?php endif ?>
</body>

<script src="js/SlideOutMenu.min.js"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
		</script>
</html>