<?php
	include "config.php";
	
	$results = mysqli_query($db, "SELECT * FROM studenttable");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<title> VIEW STUDENTS </title>
	</head>
	<body>
	
	<a class = "btnBack" href = "create.php">~BACK</a>
	<h3> STUDENT INFORMATION </h3>
	<table>
			<thread>
				<tr>
					<th>ID</th>
					<th>Student Number</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Middle Name</th>
					<th>Address</th>
					<th>Number</th>
					<th>Email</th>
					<th>Gender</th>
					<th colspan = "2">Action</th>
					<th>
				</tr>
			</thread>
			<tbody>
				<?php while ($row = mysqli_fetch_array($results)){ ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['studentnumber']; ?></td>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['middlename']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td>
							<a class = "btnUpdate" href = "update.php?id=<?php echo $row['id']; ?>">UPDATE</a>
							
						</td>
						<td>
							<a class = "btnDelete" href = "delete.php?id=<?php echo $row['id']; ?>">DELETE</a>
						</td>
					</tr>	
					
			<?php } ?>
			</tbody>
		</table>
