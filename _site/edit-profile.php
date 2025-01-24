<?php

session_start();

if(!isset($_SESSION['email'])){
	header('Location: index.php');
	exit();
}
else{

	require_once  'vendor/autoload.php';

	
	$databaseConnection = new MongoDB\Client;

	
	$myDatabase = $databaseConnection->myDB;

	
	$userCollection = $myDatabase->users;

	$userEmail = $_SESSION['email'];

	
	$data = array(
		"Email" => $userEmail,
	);

	
	$fetch = $userCollection->findOne($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<form action="actions/edit-profile.php" method="POST">
		<table>
		<input type="text" value="<?php echo $fetch['Firstname']; ?>" name="fname" id="fname" required=""/><br/><br/>

		<input type="text"value="<?php echo $fetch['Lastname']; ?>" name="lname" id="lname" required=""/><br/><br/>

		<input type="email" value="<?php echo $fetch['Email']; ?>" name="email" id="email" required=""/><br/><br/>

		<input type="text" value="<?php echo $fetch['Phone Number']; ?>" name="phoneNo" id="phoneNo" maxlength="10" pattern="[0-9]{10}" required=""/><br/><br/>

		<input type="hidden" name="hidden_id" id="hidden_id" value="<?php echo $fetch['_id']; ?>" />

		<center><input type="submit" name="update" id="update" value="Update info"/></center><br/><br/>

	</form>

	<a href="profile.php">Profile Page</a>
</table>
</body>
</html>
<?php } ?>