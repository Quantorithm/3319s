<?php
include 'connectdb.php';
$query="SELECT DISTINCT doctor.firstname AS first, doctor.lastname AS last FROM doctor,treats WHERE doctor.licensenumber NOT IN (SELECT treats.licensenumber FROM treats)";
$result = mysqli_query($connection,$query);
if (!$result) {
die("Database Error");
}
else
{
while ($row = mysqli_fetch_assoc($result)) {
	echo $row[first]." ".$row[last];
	echo "<br>";
}
mysqli_free_result($result);
}

?>
