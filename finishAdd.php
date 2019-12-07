<!DOCTYPE=html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
        include "connectdb.php";

     	$first =$_POST["firstname"];
        $last=$_POST["lastname"];
        $num=$_POST["license"];
        $date=$_POST["licensedate"];
        $spec=$_POST["specialty"];
        $hosp=$_POST["hospitalname"];


        if($first=="" || $last=="" || $num=="" || $date=="" || $spec=="" || $hosp=="")
        {
                die("Some empty fields");
        }
  

        $query = 'SELECT license FROM doctor;';
        $result=mysqli_query($connection, $query);
        if (!$result)
        {
                die("Error in finishAdd.php");
        }


        while ($row=mysqli_fetch_assoc($result))
        {
                if ($row["license"]=="$num"){
                        die("License already in database.");
                }
        }
	$query2 = 'INSERT INTO doctor (firstname, lastname, license, licensedate, specialty, worksOut) VALUES("'.$first.'","'.$last.'","'.$num.'","'.$date.'","'.$spec.'","'.$hosp.'");';

        mysqli_query($connection, $query2);
        mysqli_free_result($result);
        mysqli_close($connection);
?>

<h1> Doctor add complete </h1>
</body>
</html>


