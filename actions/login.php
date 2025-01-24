<?php

session_start();

require_once  '../vendor/autoload.php';

$databaseConnection = new MongoDB\Client;

$myDatabase = $databaseConnection->myDB;

$userCollection = $myDatabase->users;


if(isset($_POST['login'])){

	$email = $_POST['email'];
    $password = sha1($_POST['password']);
}

$data = array(
	"Email" => $email,
	"Password" => $password
);


$fetch = $userCollection->findOne($data);

if($fetch){
	
	
	$_SESSION['email'] = $fetch['Email'];

	
	header('Location: ../profile.php');
	exit();
}
else{
	?>
		<center><h1 style="color: red; font-weight:50px; font-family:arieal">User Not Found</h></center>
		<center><a href="../index.php">Try Again</a></center>
	<?php
}

