<?php 
require_once 'functions.php';
$firstname= $lastname = $address = $city = $state = $zip= $ed= $username = $password = "";
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$firstname= test_input($_POST ["fname"]);
	$lastname= test_input($_POST ["lname"]);
	$address= test_input($_POST ["address"]);
	$city= test_input($_POST ["city"]);
	$state= test_input($_POST ["state"]);
	$username= test_input($_POST ["username"]);
	$password= test_input($_POST ["password"]);
	$ed= test_input($_POST ["ed"]);
	$zip= test_input($_POST["zip"]);
}
queryMysql("INSERT INTO mentors (`username`, `password`, `firstname`, `lastname`, `ed`, `address`, `city`, `state`, `zipcode`) VALUES('$username', '$password', '$firstname', 'lastname', '$ed', '$address', '$city', '$state', '$zip')");

 ?>