<!DOCTYPE html>
<html>
<head>
      	<title>Hospital Database</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php
include "connectdb.php";	
$userDate=$_POST['date'];
$query = "SELECT firstname,lastname,specialty FROM doctor WHERE licensedate < '$userDate'";
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}


// print docs
while ($row = mysqli_fetch_assoc($result)) {
 echo "<br>";
 echo $row["firstname"]." ".$row["lastname"]." ";
 echo "<br>";
}
mysqli_free_result($result);
?>
</html>
