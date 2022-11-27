<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "admin";
	$password = "admin";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "CREATE DATABASE newsForm";

	$conn->close();
	?>
</body>
</html>