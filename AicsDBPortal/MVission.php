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
	<title>Mission and Vision</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Blueprint: Horizontal Slide Out Menu</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css" />
	<link rel="stylesheet" href="css/mv.css">
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
  		
		<div class="cimg">
  			<center><img class="vis" src="Pictures/vision.svg" alt=""></center>	
		</div>
		<div class="thead">
  			<h1>Vision</h1>
		</div>
  		<div class="qtext">
  			<div class="text">
			 <p>Asian Institute of Computer Studies is a learning institution that upholds the importance of moral values, 
			  social responsibility, and Christian formation. The school aims to become an instrument of learning, 
			  growth and development to their students, to share knowledge and enhance skills necessary 
			  in the completion of their education, and instill the importance of good values and religion 
			  to help in their moral and spiritual development.</p>
  				<br>
			  <p>Thus, Asian Institute of Computer Studies envisions its graduates to be well-rounded 
				individuals who are:</p>
				<br>
				<p>1. Physically fit, emotionally stable, morally sound and intellectually prepared.</p>
				<br>
				<p>2. Responsible individual with high integrity.</p>
				<br>
				<p>3. Service-oriented persons who are responsive to the moral, spiritual, cultural, 
				social and economic needs of their country.</p>
				<br>
				<p>4. Innovative and active participants in the shaping of the future I.T. generation.</p>
			  </div>
		</div>
		<div class="cimg">
  			<center><img class="vis" src="Pictures/mission1.svg" alt=""></center>	
		</div>
		<div class="thead">
  			<h1>Mission</h1>
		</div>
		<div class="qtext">
  			<div class="text">
		
				<p>Asian Institute of Computer Studies takes upon itself the mission of providing high-quality 
				yet affordable I.T. education to the Filipino youth, and producing well-rounded graduates 
				who are equipped with the knowledge, skills, and values needed to cope and adapt to the 
				complexities and advancements in the world of Information Technology.</p>
				<br>
				<p>1. Provide an students an affordable but high quality students.</p>
				<br>
				<p>2. Balance their technological education with value-oriented studies.</p>
				<br>
				<p>3. Support the students’ development by providing them responsible and professionally competent
				 faculty, high-class facilities, seminars that keep them abreast of the latest technological 
				 breakthroughs, and sufficient practical training through simulated office experience, 
				 as well as linkages with reputable business establishments.</p>
			  </div>
		</div>
		
		
			

		


<br><br><br><br><br><br><br><br><br><br>
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