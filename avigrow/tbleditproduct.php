<?php
require_once('connection.php');
$id = $_GET['id'];
if (isset($_POST['save'])) 
{
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$amount = mysqli_real_escape_string($con,$_POST['amount']);
	$code = mysqli_real_escape_string($con,$_POST['code']);
	$image = mysqli_real_escape_string($con,$_POST['image']);
	$price = mysqli_real_escape_string($con,$_POST['price']);	

	if(empty($name) || empty($code) || empty($image) || empty($price)) {
		echo "Please fill in the blanks";
	}
	else {
		$sql = "UPDATE tblproduct SET name='$name', amount='$amount', code='$code', image='$image', price='$price' WHERE id='$id'";
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