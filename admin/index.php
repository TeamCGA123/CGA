<?php include '../Database.php'; ?>

<?php
	//Create Select Query
	$query = "SELECT * FROM requests ORDER BY id DESC";
	$requests = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Certificate generation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    </head>
    <body>
    <div class="container">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i> <h3>  List of certificates</h3>
        <ul>
        <li> <a href="index.php">Requests</a> </li>
        <li> <a href="processed.php">Processed</a> </li>
        <li> <a href="ignored.php">Ignored</a> </li>
        </ul>
    </div>
	<div class="table">
       <table style="width:100%" border="1" >
			<tr>
				<th>Name</th>
				<th>USN</th>
				<th>Certificate</th>
				<th>Action</tr>
			<tr>
			<?php while($row = mysqli_fetch_assoc($requests)) : ?>
			<form method = "post" action="view.php">
			<tr>
				<th name = "name" value = "<?php echo $row['name'];?>"><?php echo $row['name'];?></th>
				<th><?php echo $row['usn'];?></th>
				<th><?php echo $row['certificateName'];?></th>
				<th><input type="submit" name="view" value="View" onclick="mover()"/><th>
                <th><input type="hidden" value="<?php echo $row['id']?>" name="idret" ></th>
				</tr>
			<tr>
			</form>				
			<?php endwhile; ?>		
		   </tr>	
		</table>
		   
		</div>
    </body>
</html>