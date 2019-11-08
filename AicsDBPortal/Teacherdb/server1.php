<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'teacher');

	// initialize variables
	$name = "";
	$gradelvl= "";
	$contactnum= "";
	$age= "";
	$birth= "";
	$position= "";
	$email= "";





	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$gradelvl = $_POST['gradelvl'];
		$contactnum = $_POST['contactnum'];
		$age = $_POST['age'];
		$birth= $_POST['birth'];
		$position = $_POST['position'];
		$email = $_POST['email'];

		mysqli_query($db, "INSERT INTO info1  (name, gradelvl, contactnum, age, birth, position, email ) VALUES ('$name', '$gradelvl', '$contactnum', '$age', '$birth', '$position', '$email')"); 
		$_SESSION['message'] = "Information saved"; 
		header('location: index.php');
	}
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$gradelvl = $_POST['gradelvl'];
		$contactnum = $_POST['contactnum'];
		$age = $_POST['age'];
		$birth= $_POST['birth'];
		$position = $_POST['position'];
		$email = $_POST['email'];
	
		mysqli_query($db, "UPDATE info1 SET name='$name', gradelvl='$gradelvl', contactnum='$contactnum', age='$age' , birth='$birth', position='$position', email='$email' WHERE id=$id");
		$_SESSION['message'] = "Information Updated!"; 
		header('location: index.php');
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info1 WHERE id=$id");
		$_SESSION['message'] = "Informations deleted!"; 
		header('location: index.php');
	}