<!DOCTYPE=html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
	include "connectdb.php";
	$code = $_POST["hospitalName"];
	$name = $_POST["changedName"];


	if($code=="" || $name==""){
		die("Fields not inputted.");
	}



	$query = 'UPDATE hospital SET name="'.$name.'" WHERE code="'.$code.'";'; 
	$result=mysqli_query($connection, $query);
	echo "Changed hospital name.";


	mysqli_close($connection);
?>	
</body>
</html>
