<?php

require_once('connection.php');

if (isset($_POST['btn-save'])) 
{
	$Fname = mysqli_real_escape_string($con,$_POST['Fname']);
	$Lname = mysqli_real_escape_string($con,$_POST['Lname']);
	$Phone = mysqli_real_escape_string($con,$_POST['Phone']);
	$Email = mysqli_real_escape_string($con,$_POST['Email']);
	$Password = mysqli_real_escape_string($con,$_POST['Password']);	

	if(empty($Fname) || empty($Lname) || empty($Phone) || empty($Email) || empty($Password)) {
		echo "Please fill in the blanks";
	}
	else {
		$Pass = md5($Password);
		$sql = "insert into users (Fname,Lname,Phone,Email,Password) values('$Fname','$Lname','$Phone','$Email','$Pass')";
		$result = mysqli_query($con,$sql); 
		if ($result) {
			echo "your informations have been saved in the database";
		}
		else {
			echo "Please check your Query";
		}
	}
}

?>