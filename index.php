<!DOCTYPE html>
<html>
<head>
	<title>Hospital Database</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php include "connectdb.php";?>
<h1>Gunderstain Hospital Directory</h1>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="showDocNames.php" method="post" >
<h3>Display all doctor names:</h3>	      
		<input type="radio" value="firstname" name="name">FIRST NAME<br>
		<input type="radio" value="lastname" name="name">LAST NAME<br>
		<input type="radio" value="ASC" name="order">ASCENDING<br>
		<input type="radio" value="DESC"name="order">DESCENDING<br>
	<input type="submit" value="Search">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<h3>Search doctors who received lisences before a specific date:</h3>
<form   action="showDocLisences.php" method="post">
  Enter Date: <input type='date' name="date">
  <input type="submit" value="Search">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<h2>Add a Doctor</h2>
<form action="addDoc.php" method="post">
<input type="submit" value="Proceed"><br>
</form>
<br>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<h2>Delete a Doctor</h2>
<form action="deleteDoc.php" method="post">
<input type="submit" value="Proceed"><br>
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
 <form action="updateHospital.php" method="post">
  <input class="buttonClass" type='submit' name="updateHopistalName" value="Update Hospital Name">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
 <form action="showHospitals.php" method="post">
  <input class="buttonClass" type='submit' name="showHospitals" value="Show All Hospitals">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
 <form action="searchPatient.php" method="post">
  <input class="buttonClass" type='submit' name="searchPatient" value="Search patient">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="assignDoc.php" method="post">
  <input class="buttonClass" type='submit' name="assignDoc" value="Assign Doctor to Patient">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="unassignDoc.php" method="post">
  <input class="buttonClass" type='submit' name="unassignDoc" value="Unassign Doctor from Patient">
</form>
</div>


<div style="height:30%;font-weight: bold;font-size:20px;margin-top:15px;margin-bottom: 15px">
<form action="noPatients.php" method="post">
  <input class="buttonClass" type='submit' name="noPatients" value="See doctors with no patients">
</form>
</div>
 
</body>
</html>

