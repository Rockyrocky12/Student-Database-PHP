<?php 
  include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM sinfo WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$gradelvl = $n['gradelvl'];
			$strand = $n['strand'];
			$section = $n['section'];
			$contactnum = $n['contactnum'];
			$age = $n['age'];
			$birth = $n['birth'];
			$dadname = $n['dadname'];
			$momname = $n['momname'];
			$email = $n['email'];
		}

	}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>Student's Database</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="../CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/navbar.css" />
	<link rel="stylesheet" href="../CSS/footer.css">
	<script src="../JS/SlideOut.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/studentdbstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">
			<header class="clearfix">
				<span>Asian Institute of Computer Studies </span>
				<h1>Web Portal</h1>
				
				<nav>
					<a href="../home.php?logout='1'" data-info="Log out"><img class="loglogo" src="../icons/switch.svg"></a>
				</nav>
				
			</header>
				
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="../home.php">Home</a>
							</li>
							<li>
								<a>About AICS</a>
								<ul class="cbp-hssubmenu cbp-hssub-rows">
									<li><a href="../History.php"><img src="../Pictures/169112.svg" alt="img07"/><span>History</span></a></li>
									<li><a href="../MVission.php"><img src="../Pictures/mission.svg" alt="img08"/><span>Mission and Vision</span></a></li>
									<li><a href="../Facility.php"><img src="../Pictures/facility.svg" alt="img09"/><span>Facility</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Database</a>
								<ul class="cbp-hssubmenu">
									<li><a href="../Studentdb/index.php"><img src="../Pictures/student.svg" alt="img10"/><span>Students' PortalDB</span></a></li>
									<li><a href="../Teacherdb/index.php"><img src="../Pictures/teacher.svg" alt="img06"/><span>Teachers' PortalDB</span></a></li>
								</ul>
							</li>
							<li><a href="../Contact.php">Contact</a></li>
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

            <DIV class="containtext">
                <div class="text">
                    <h1>Public Student Info Directory</h1>
                </div>
            
            </DIV>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Grade Level</th>
                    <th>Strand</th>
                    <th>Section</th>
                    <th>Contact Number</th>
                    <th>Age</th>
                    <th>Birth</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Email</th>
                    <th colspan="10">Action</th>
                </tr>
            </thead>
            
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['gradelvl']; ?></td>
                    <td><?php echo $row['strand']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['contactnum'];?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['birth']; ?></td>
                    <td><?php echo $row['dadname']; ?></td>
                    <td><?php echo $row['momname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                    </td>
                    <td>
                        <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <?php if (isset($_SESSION['message'])): ?>
		    <div class="msg">
			        <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                     ?>
                    </div>
             <?php endif ?>
        <?php $results = mysqli_query($db, "SELECT * FROM stinfo"); ?>

                <form method="post" action="server.php" >

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="input-group">
                    <label>Grade Level</label>
                    <input type="text" name="gradelvl"  maxlength="2" value="<?php echo $gradelvl; ?>">
                </div>
                <div class="input-group">
                    <label>Strand</label>
                    <input type="text" name="strand" value="<?php echo $strand; ?>">
                </div>
                <div class="input-group">
                    <label>Section</label>
                    <input type="text" name="section" value="<?php echo $section; ?>">
                </div>
                <div class="input-group">
                    <label>Contact Number</label>
                    <input type="text" name="contactnum" maxlength="11" name="contactnum" maxlength="11" value="<?php echo $contactnum; ?>">
                </div>
                <div class="input-group">
                    <label>Age</label>
                    <input type="number" name="age" value="<?php echo $age; ?>">
                </div>
                <div class="input-group">
                    <label>Birthyear</label>
                    <input type="date" name="birth" value="<?php echo $birth; ?>">
                </div>
                <div class="input-group">
                    <label>Father's Name</label>
                    <input type="text" name="dadname" value="<?php echo $dadname; ?>">
                </div>
                <div class="input-group">
                    <label>Mother's Name</label>
                    <input type="text" name="momname" value="<?php echo $momname; ?>">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group">

                    <?php if ($update == true): ?>
                    <center><button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button></center>
                    <?php else: ?>
                       <center> <button class="btn" type="submit" name="save" >Save</button></center>
                    <?php endif ?>
                </div>
        </form>


        
            <br><br><br><br><br><br><br><br><br><br><br><br>

            <footer>
                <img class="imgl"src="../Pictures/Aics.png" style>
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

            <script src="../js/SlideOutMenu.min.js"></script>
                <script>
                    var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
      </script>
</html>