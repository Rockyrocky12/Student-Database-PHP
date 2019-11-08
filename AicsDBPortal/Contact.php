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
	<link rel="stylesheet" href="CSS/footer.css">
	<link rel="stylesheet" href="CSS/contact.css">
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


			<div class="containbox">
				<div class="row">
					<div class="column" >
					<b>Contact Us:</b>
  					<br><br>
					Asian Institute of Computer Studies
					<br><br><br>
					<b>Address:</b>
					<br><br>
					Dacay Building, 3rd Floor, N Escario St, Cebu City, 6000 Cebu
					<br><br><br>
					<b>Email Address:</b>
					<br><br>
					admission@aics.edu.ph
					<br><br><br>
					<b>Telephone Number:</b>
					<br><br>
					+63 (2) 952-0308
					<br><br><br>
					<b>Fax Number:</b>
					<br><br>
					+63 (2) 430-4651
					<br><br>
					</div>
					<div class="column" >
							<div class="imgcon">
								<center><img class="imgsoc" src="Pictures/social.svg" alt=""></center>
							</div>
							<div class="thead">
							<h1>Social Media</h1>
							</div>
							
							<div class="imgcon1">
							<center><a href="https://www.facebook.com/aics.cebu/"><img class="imgsoc1" src="Pictures/fbn.svg" alt=""></a></center>
							</div>
							<div class="imgcon1">
							<center>	<a href="https://twitter.com/aicseduph"><img class="imgsoc1" src="Pictures/twitter.svg" alt=""></a></center>
							</div>
							
					</div>
				</div>
			</div>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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