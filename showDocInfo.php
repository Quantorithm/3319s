<!DOCTYPE=html>
<html>
<head>
	<title>DocInfo </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<br>
<?php
	include "connectdb.php";
	$doctor=$_POST["docs"];
	$query = 'SELECT doctor.*, hospital.name, hospital.city  FROM doctor INNER JOIN hospital ON worksOut =code WHERE license="' . $doctor .'";';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("Query for doctor info failed.");
	}

	while ($row=mysqli_fetch_assoc($result)){
		echo "<br>name: " . $row["firstname"] . " " . $row["lastname"] ."<br><br>speciality: " . $row["specialty"] . "<br><br>license: ". $row["license"] . "<br><br>date of license: " .$row["licensedate"] . "<br> <br>works at " .  $row["name"]." in ".  $row["city"];
	}

	mysqli_free_result($result);
	mysqli_close($connection);
?>
</body>
</html>


