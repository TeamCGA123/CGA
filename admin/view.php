<?php include '../Database.php'; ?>
<?php
$t = isset($_POST['name']) ? $_POST['name'] : '';
echo $t;
if( isset($_POST['view']))
{
	$q= $_POST['idret'];
	$w="SELECT * FROM requests WHERE id=$q";
	$q=mysqli_query($con,$w);


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
echo $q['$usn'];
echo $q['$name'];


?>

</pre>
</body>
</html>
