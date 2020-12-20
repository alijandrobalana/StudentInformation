<?php
	include "config.php";
	
	//The one that get the id of the choice row or choice student
	if(isset($_GET['id'])){
	$get_id = $_GET['id'];
	
	//The one that compares the id that we get from the choice row to the id of the database 
	$sql = mysqli_query($db, "SELECT * FROM studenttable WHERE id = $get_id");
	$result = mysqli_fetch_array($sql);

			$studentnumber = $result['studentnumber'];
			$firstname = $result['firstname'];
			$lastname = $result['lastname'];
			$middlename = $result['middlename'];
			$address = $result['address'];
			$number = $result['number'];
			$email = $result['email'];
			$gender = $result['gender'];
		
	}
	
	//Updates the database of the choice student
	
	if(isset($_POST['update'])){
		$studentnumber = $_POST['studentnumber'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$address = $_POST['address'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		
		$sql = "UPDATE `studenttable` SET `studentnumber`='$studentnumber',`firstname`='$firstname',`lastname`='$lastname',
													`middlename`='$middlename',`address`='$address',`number`='$number',
													`email`='$email',`gender`='$gender' WHERE `id` = $get_id";
		//Execute querry
		$result = mysqli_query($db, $sql);
	
		if ($result == TRUE){
			header('location: view.php');
		}else{
			echo "RECORD UPDATED UNSUCCESSFULY.";
		}
	}
	
?>
	<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<title> INFORMATION GATHERING </title>
	</head>
	<body>
	<form action = "" method = "POST">
	<fieldset class = "border">
		<Legend>UPDATE STUDENT INFORMATION</Legend>
		Student Number:<br>
		<input type = "text" name = "studentnumber" value ="<?php echo $studentnumber; ?>">
		<br>
		First Name:<br>
		<input type = "text" name = "firstname" value ="<?php echo $firstname; ?>">
		<br>
		Last Name:<br>
		<input type = "text" name = "lastname" value ="<?php echo $lastname; ?>">
		<br>
		Middlename Name:<br>
		<input type = "text" name = "middlename" value ="<?php echo $middlename; ?>">
		<br>
		Address:<br>
		<input type = "text" name = "address" value ="<?php echo $address; ?>">
		<br>
		Contact Number:<br>
		<input type = "text" name = "number" value ="<?php echo $number; ?>">
		<br>
		Email Address:<br>
		<input type = "text" name = "email" value ="<?php echo $email; ?>">
		<br>
		Gender [M / F]:<br>
		<input type = "text" name = "gender" value ="<?php echo $gender; ?>">
		<br><br>
		<input type = "submit" name = "update" value = "update">
	</fieldset>
	</form>
</body>
</html>