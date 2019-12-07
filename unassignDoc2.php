<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="unassignDoc2.php" method="post">

<?php
    	include "connectdb.php";
	$Doc=$_POST["docLicense"];
	$Patient=$_POST["patientOHIP"];

  	//make sure not empty
	if($Doc=="" || $Patient==""){
		die("input empty");
	}


  	//put into treats database
	$query = 'DELETE FROM treats WHERE license="'.$Doc.'" AND OHIP="'.$Patient.'";';
	mysqli_query($connection, $query);


	echo "Un-Assignment complete!";
	mysqli_close($connection);
?>

</body>
</html>


