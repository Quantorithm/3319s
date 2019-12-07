<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
     	include "connectdb.php";
        $query = 'SELECT * FROM hospital;';



        $result=mysqli_query($connection, $query);

        if (!$result)
  {
    
                die("Error in deleteDoc");
        }
?>


<form action="confirmDelete.php" method="post">

<h3>Enter license of doctor to delete</h3>
        <input type="text" name="licensenumber"><br>
  <br>
      	<input type="submit" value="Submit"/>
</form>
<br>
<p>
<hr>
<p>


</body>
</html>
