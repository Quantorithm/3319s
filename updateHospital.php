<!DOCTYPE=html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<h1> Pick a Hospital to Update.</h1>
<body>
<?php
	include "connectdb.php";
	$query = 'SELECT * FROM hospital;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("Error in updateHospotal");
	}
?>

<form action="updateHospital2.php" method="post">
	<?php
	while ($row=mysqli_fetch_assoc($result)){
		echo '<input type = "radio" name="hospitalName" value="'.$row["code"].'" >  Hospital Name: ' . $row["name"] . '<br>';
	}
	?>


<br></br>
	
<h1> Enter new Hospital Name.</h1>
<input type="text" name="changedName">
<input type="submit" value="Submit"/>
</form>

<?php
mysqli_free_result($result);
mysqli_close($connection);
?>
</body>
</html>
