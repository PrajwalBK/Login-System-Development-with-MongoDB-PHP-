<?php

require_once  '../vendor/autoload.php';

$databaseConnection = new MongoDB\Client;

$myDatabase = $databaseConnection->myDB;

$userCollection = $myDatabase->users;


if(isset($_POST['signup'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
    $password = sha1($_POST['password']);
}

$data = array(
	"Firstname" => $fname,
	"Lastname" => $lname,
	"Email" => $email,
	"Phone Number" => $phoneNo,
	"Password" => $password
);

$insert = $userCollection->insertOne($data);

if($insert){
	?>
		<center><h1 style="color: green; font-weight:100px; font-family:Arial;">Successfully Registered</h1></center>
		<center><a href="../index.php">Login</a></center>
	<?php
}
else{
	?>
		<center><h4 style="color: red;">Registration Failed</h4></center>
		<center><a href="../signup.php">Try Again</a></center>
	<?php
}

