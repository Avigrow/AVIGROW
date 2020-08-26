<?php
require_once('connection.php');

if (isset($_POST['save'])) 
{
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$code = mysqli_real_escape_string($con,$_POST['code']);
	$amount = mysqli_real_escape_string($con,$_POST['amount']);
	$image = mysqli_real_escape_string($con,$_POST['image']);
	$price = mysqli_real_escape_string($con,$_POST['price']);	

	if(empty($name) || empty($code) || empty($image) || empty($price)) {
		echo "Please fill in the blanks";
	}
	else {
		$sql = "insert into tblproduct (name,amount,code,image,price) values('$name','$amount','$code','$image','$price')";
		$result = mysqli_query($con,$sql); 
		if ($result) {
			echo "your informations have been saved in the database";
			header('location: admin.php');
		}
		else {
			echo "Please check your Query";
		}
	}
}
?>