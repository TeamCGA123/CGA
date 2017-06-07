<?php
include 'Database.php';

$name = mysqli_real_escape_string($con, $_POST['name']);
$usn = mysqli_real_escape_string($con, $_POST['usn']);
$message = mysqli_real_escape_string($con, $_POST['message']);
$certificateName = mysqli_real_escape_string($con, $_POST['certificateName']);
$fathersname = mysqli_real_escape_string($con, $_POST['fathersname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);

//if(!isset($name) || $name == '' || !isset($usn) || $usn == '' || !isset($message) || $message == '' )
	$query = "INSERT INTO requests (name, usn, message, certificateName, fathersname, email, mobileno) VALUES ('$name', '$usn', '$message', '$certificateName' , '$fathersname' , '$email' ,'$mobileno')";
	/*$id=$mysqli_insert_id($con);
	$a=$query['usn'];
	$arr=array($a->$id);*/

	if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
		
		?>