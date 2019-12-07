<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
	include "connectdb.php";
	$num = $_POST["licensenumber"];

  
	$query = 'select count(license) as x from doctor WHERE license="'.$num.'";';
	$result=mysqli_query($connection, $query);
	$row=mysqli_fetch_assoc($result);
	if ($row["x"]==0)
  	{
		die("Doctor DNE");
	}

   
	$query2 = 'select count(license) as y from treats WHERE license="'.$num.'";';
	$result2=mysqli_query($connection, $query2);
	$row=mysqli_fetch_assoc($result2);
	if ($row["y"]==0)
  	{
		echo "Doctor has no patients, click submit to delete.<br>";
		
	}
	else
	{
		echo "Doctor has patients, click submit to delete.<br>";
	}
	?>	




	<!-- Finished checking and notifying, now finalize in finalComplete based on response -->


	<form action="finalComplete.php" method="post">
		<input type="radio" name="Confirm" value="<?php echo $_POST['licensenumber']; ?>" > Yes <br>
		<input type="radio" name="Confirm" value="No" checked="checked"> No <br>
	
		<input type="submit" value="Submit"><br>
	</form>


<?php
	mysqli_free_result($result);
	mysqli_free_result($result2);

	mysqli_close($connection);
?>
</body>
</html>


