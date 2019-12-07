<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>



<body>
<?php
	include "connectdb.php";

	$ohip=$_POST["OHIP"];

	// see if patient exists
	$query = 'SELECT * FROM patient WHERE OHIP="'.$ohip.'";';
	$result=mysqli_query($connection, $query);
	$row=mysqli_fetch_assoc($result);
	if (!$row){
		die("Patient DNE");
	}
		
	$query2 = 'SELECT patient.firstname as first, patient.lastname as last, doctor.firstname, doctor.lastname, doctor.lastname FROM treats INNER JOIN doctor ON treats.license=doctor.license INNER JOIN patient ON patient.OHIP=treats.OHIP WHERE patient.OHIP="'.$ohip.'";';
	$result2=mysqli_query($connection, $query2);
	$docs ="1";



	// Print based on how many docs registered to the patient to insert "and" in between

	while ($row2=mysqli_fetch_assoc($result2))
  	{
		if($docs=="1")
		{
			echo "Patient: " . $row["firstname"] . " <br> Patient Last Name: " . $row["lastname"] ."<br> ";
			echo "Doctor " . $row2["firstname"] . " " . $row2["lastname"];

   
			$docs="2";
		}	
    
		else
    	{
			echo " and " . $row2["firstname"] . " " . $row2["lastname"]."<br>";
		}
	}


?>
</body>
</html>

