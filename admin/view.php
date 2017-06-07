<?php include '../Database.php'; ?>
<?php
$t = isset($_POST['name']) ? $_POST['name'] : '';
if( isset($_POST['view']))
{
	$q= $_POST['idret'];
	$w="SELECT * FROM requests WHERE id=$q";
	$details=mysqli_query($con,$w);


}

?>
<!Doctype html>
<html>
<head>
</head>
<body>


<h1 align=center>Details of student</h1>
<?php
while($row = $details -> fetch_assoc()){
	echo "<html><body>";
echo "<b><p>NAME:</b>";
echo $row['name'];
 echo "<br><b>USN:</b>";
echo $row['usn'];
echo "<br><b>Father's Name:</b>";
echo $row['fathersname'];
echo "<br/><b>MOBILE NO:</b>";
echo $row['mobileno'];
 echo "<br><b>EMAIL:</b>";
echo $row['email'];
echo "</p>";
echo "</body></html>";
}


?>
<input type="submit" value="Process"/>&nbsp;&nbsp;
<input type="submit" value="Ignore"/>

</body>
</html>
