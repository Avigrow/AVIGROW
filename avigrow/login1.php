<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'avigrow');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['submit'])) {
	login();
}

// REGISTER USER


// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = $_POST['Email'];
	$password = $_POST['Password'];

	// make sure form is filled properly
	

	// attempt login if no errors on form
	if ($db) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE Email='$username' AND Password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['admin']) {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: products.php');
			}
		}else {
			echo "Wrong username/password combination";
		}
	}
}
?>	