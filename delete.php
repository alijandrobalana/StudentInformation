<?php
	include "config.php";
	//Updates the database of the choice student
	if(isset($_GET['id'])){
	$get_id = $_GET['id'];
	
	$sql = mysqli_query($db, "DELETE FROM `studenttable` WHERE id = $get_id");
	
	//Execute querry
	$result = mysqli_query($db, $sql);
	
		if ($result == TRUE){
			echo "RECORD DELETED SUCCESSFULY.";
			header('location: view.php');
		}else{
			echo "RECORD DELETED UNSUCCESSFULY.";
		}
	}
	
?>