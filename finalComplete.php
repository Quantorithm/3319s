<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
	include"connectdb.php";
	$yes = $_POST["Confirm"];
	if ($yes=="No"){
		die("Operation cancelled.");
	}
		

	$query3 = 'DELETE FROM doctor WHERE license ="'.$yes.'";';
	mysqli_query($connection, $query3);
	echo "Deletion complete.";

	mysqli_close($connection);
?>
</body>
</html>


