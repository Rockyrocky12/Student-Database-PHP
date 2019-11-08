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
	<script src="JS/SlideOut.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">
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
		
			
			<div class="greet">
				<?php  if (isset($_SESSION['username'])) : ?>
					<h1>Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></h1>
				<?php endif ?>
				<div class="winke"> 
				<img class="wink" src="Pictures/wink.svg" alt="">
				</div>
			</div>
			
			<div class="w3-panel w3-card w3-#47a3da">
				<div class="text-container">
					<h1>Upcoming Event</h1>
				</div>
			</div>
			<div class="w3-panel w3-card-2 ">
				<div class="text-container1">
					<center>
					<h1>AICS Intramurals 2019</h1>
					</center>
				</div>
				<div class="clearfix">
					<div class="img-container">
						<img src="Pictures/blue.png" style="width:100%">
					</div>
					<div class="img-container">
					<img src="Pictures/green.png" style="width:100%">
					</div>
					<div class="img-container">
					<img src="Pictures/pink.png" style="width:100%">
					</div>
					<div class="img-container">
						<img src="Pictures/red.png" style="width:100%">
					</div>
					<div class="img-container">
						<img src="Pictures/yellow.png" style="width:100%">
					</div>
					<div class="img-container">
					<img src="Pictures/orange.png" style="width:100%">
					</div>
				</div>
				<br><br>
				<center><p>Credits: Johnrey Arcenal</p></center>
				<br><br>
			</div>

<br><br><br><br><br><br><br><br><br><br><br><br>

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