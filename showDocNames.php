<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>
<?php
	include"connectdb.php";
?>
<ol>
<?php	
	$query = 'SELECT * FROM doctor ORDER BY ' .$_POST["name"]. ' ' .$_POST["order"].';';  
	$result=mysqli_query($connection, $query);
	if (!$result)
  {
		die("Query for doctor names failed.");
	}
?>

<form action="showDocInfo.php" method="post">

	<?php
	while ($row=mysqli_fetch_assoc($result))
  	{
		echo '<input type = "radio" name="docs" value="'.$row["license"].'" > ' . $row["firstname"] . ' ' . $row["lastname"] . '<br>';
	}
	?>

  <br>

	<input type="submit" value="Proceed"/>

</form>
</ol>
<?php
	
	mysqli_free_result($result);
	mysqli_close($connection);
?>

</body>
</html>



