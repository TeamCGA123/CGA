<?php
include 'Database.php';

$name = mysqli_real_escape_string($con, $_POST['name']);
$usn = mysqli_real_escape_string($con, $_POST['usn']);
$message = mysqli_real_escape_string($con, $_POST['message']);
$certificateName = mysqli_real_escape_string($con, $_POST['certificateName']);

//if(!isset($name) || $name == '' || !isset($usn) || $usn == '' || !isset($message) || $message == '' )
	$query = "INSERT INTO requests (name, usn, message, certificateName) VALUES ('$name', '$usn', '$message', '$certificateName')";
	
	if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
		
		?>