<?php
	include "config.php";
	
	//If the submit button is clicked/submitted
	if(isset($_POST['submit'])){
		$studentnumber = $_POST['studentnumber'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$address = $_POST['address'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		
		$sql = "INSERT INTO studenttable (studentnumber, firstname, lastname, middlename, address, number, email, gender)
					VALUES ('$studentnumber', '$firstname', '$lastname', '$middlename', '$address', '$number', '$email', '$gender')";
		
		//Execute querry
		mysqli_query($db, $sql);
	}
?>	

<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<title> STUDENT FORM </title>
	</head>
	<body>
	<form action = "" method = "POST">
	<fieldset class = "border">
		<Legend> STUDENT INFORMATION </Legend>
		Student Number:<br>
		<input type = "text" name = "studentnumber">
		<br>
		First Name:<br>
		<input type = "text" name = "firstname">
		<br>
		Last Name:<br>
		<input type = "text" name = "lastname">
		<br>
		Middlename Name:<br>
		<input type = "text" name = "middlename">
		<br>
		Address:<br>
		<input type = "text" name = "address">
		<br>
		Contact Number:<br>
		<input type = "text" name = "number">
		<br>
		Email Address:<br>
		<input type = "text" name = "email">
		<br>
		Gender [M / F]:<br>
		<input type = "text" name = "gender">
		<br><br>
		<input class = "btnSubmit" type = "submit" name = "submit" value = "submit">
	</fieldset>
	</form>
		<a class = "btnView" href = "view.php">VIEW INFORMATION</a>
</body>
</html>