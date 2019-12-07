<!DOCTYPE html>
<html>
<head>
      	<title>Hospital Database</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php
include "connectdb.php";
$query = "select * from hospital inner join doctor on hospital.head=doctor.license order by name ASC";
$result=mysqli_query($connection,$query);
if(!$result)
{
	die("Query to show hospitals failed.");
}



while($row = mysqli_fetch_assoc($result)){
	echo $row["name"];	
	echo $row["firstname"];
	echo $row["lastname"];
	echo $row["headDate"];
	echo "<br></br>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>
</html>
