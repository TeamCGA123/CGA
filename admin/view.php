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
<pre>

<h1>Details of student</h1>
<?php
while($row = $details -> fetch_assoc()){
	echo "<html><body>";
echo "<b><p>USN:</b>";
echo $row['usn'];
 echo "<br><b>NAME:</b>";
echo $row['name']."</p>";
echo "</body></html>";
}


?>

</pre>
</body>
</html>
