<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="assignDoc2.php" method="post">

<?php
    	include "connectdb.php";

	$Doc=$_POST["docLicense"];
	$Patient=$_POST["patientOHIP"];

  	//Make sure theyre not empty
	if($Doc=="" || $Patient==""){
		die("input empty");
	}
	

  	//put them into the trests database
	$query = 'INSERT INTO treats VALUES ("'.$Patient.'", "'.$Doc.'");';
	mysqli_query($connection, $query);


	echo "Assignment complete!";
	mysqli_close($connection);
?>

</body>
</html>


