<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Pick a patient and Doctor you want treating the patient. </h2>
<form action="assignDoc2.php" method="post">
<?php
	include "connectdb.php";
	$query = 'SELECT * FROM patient;';
	$result=mysqli_query($connection, $query);
	if (!$result){
		die("Error in assignDoc");
	}

  	
	// List the patients
	while ($row=mysqli_fetch_assoc($result))
  	{
		echo "<input type = 'radio' name='patientOHIP' value='".$row['OHIP']."' > OHIP Number: ". $row['OHIP'] . "<br> Name: " . $row['firstname'] . " " . $row['lastname'] . "<br><br>";
	}
?>



<br></br>
<?php
	$query2 = 'SELECT * FROM doctor;';
	$result2=mysqli_query($connection, $query2);
	if (!$result2){
		die("error in assignDoc");
	}

  	//List the doctors
	while ($row=mysqli_fetch_assoc($result2)){
		echo "<input type = 'radio' name='docLicense' value='".$row['license']."' > <br> License Number: ". $row['license'] . " <br> Name: " . $row['firstname'] . " " . $row['lastname'] . "<br>";
	}
?>
<br>
<input type="submit" value="submit"/>
<?php
	mysqli_free_result($result);
	mysqli_free_result($result2);
	mysqli_close($connection);
?>

</body>
</html>


