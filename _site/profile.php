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
	<title>Profile Page</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<table>
		<tr>
			<td>Firstname : </td>
			<td><?php echo $fetch['Firstname']; ?></td>
		</tr>
		<tr>
			<td>Lastname : </td>
			<td><?php echo $fetch['Lastname']; ?></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><?php echo $fetch['Email']; ?></td>
		</tr>
		<tr>
			<td>Phone Number : </td>
			<td><?php echo $fetch['Phone Number']; ?></td>
		</tr>
		<tr>
			<td><a href="edit-profile.php?id=<?php echo $fetch['_id']; ?>">Edit</a> </td>
			<td><a href="logout.php">Logout</a></td>
		</tr>
	</table>
</body>
</html>

<?php } ?>