<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$gradelvl= "";
	$strand= "";
	$section= "";	
	$contactnum= "";
	$age= "";
	$birth= "";
	$dadname= "";
	$momname= "";
	$email= "";

	
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$gradelvl = $_POST['gradelvl'];
		$strand = $_POST['strand'];
		$section = $_POST['section'];
		$contactnum = $_POST['contactnum'];
		$age = $_POST['age'];
		$birth= $_POST['birth'];
		$dadname = $_POST['dadname'];
		$momname = $_POST['momname'];
		$email = $_POST['email'];

		mysqli_query($db, "INSERT INTO info (name, gradelvl, strand, section, contactnum, age, birth, dadname, momname, email ) VALUES ('$name', '$gradelvl', '$strand', '$section', '$contactnum', '$age', '$birth', '$dadname', '$momname', '$email')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$gradelvl = $_POST['gradelvl'];
		$strand = $_POST['strand'];
		$section = $_POST['section'];
		$contactnum = $_POST['contactnum'];
		$age = $_POST['age'];
		$birth= $_POST['birth'];
		$dadname = $_POST['dadname'];
		$momname = $_POST['momname'];
		$email = $_POST['email'];

		mysqli_query($db, "UPDATE info SET name='$name', gradelvl='$gradelvl', strand='$strand', section='$section', contactnum='$contactnum', age='$age' , birth='$birth', dadname='$dadname', momname='$momname', email='$email'  WHERE id=$id");
		$_SESSION['message'] = "Information Updated!"; 
		header('location: index.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Infomation Deleted"; 
	header('location: index.php');
}
	$results = mysqli_query($db, "SELECT * FROM info");
?>