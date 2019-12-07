<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Doctor</h2>
<form action="finishAdd.php" method="post">
	First Name: <input type="text" name="firstname">
	<br></br>
	Last Name: <input type="text" name="lastname">
	<br></br>
  	License: <input type="text" name="license"> 
	<br></br>
	Specialty: <input type="text" name="specialty">
	<br></br>	
	License Date: <input type="date" name="licensedate">
	<br></br>
	Hospital: 
	<br></br>
<!-- Use radio button to pick hospital -->

<?php
        include"connectdb.php";
        $query = 'SELECT * FROM hospital;';
        $result=mysqli_query($connection, $query);
        if (!$result)
        {
                die("Error in addDoc.php");
        }

	while ($row=mysqli_fetch_assoc($result)){
		echo '<input type = "radio" name="hospitalname" value="'.$row["code"].'" > Name: ' . $row["name"] . '<br><br>';
	}
	?>
  <br></br>
	<input type="submit" value="Submit"/>
</form>
<?php
	mysqli_free_result($result);
	mysqli_close($connection);
?>
<p>
<hr>
<p>
</body>
</html> 

