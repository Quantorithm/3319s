<html>
<head>
        <link rel="stylesheet" href="style.css">
</head>

<?php
include"connectdb.php";
$query="SELECT DISTINCT doctor.firstname AS first,doctor.lastname AS last FROM doctor,treats WHERE doctor.license NOT IN (SELECT treats.license FROM treats)";
$result = mysqli_query($connection,$query);

if (!$result) {
die("Query error in noPatients.php");
}


// List all the patientless docs
while ($row = mysqli_fetch_assoc($result)) {
	echo $row[first]." ".$row[last];
	echo "<br>";
}

mysqli_free_result($result);
?>
</html>
