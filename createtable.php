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
	$dbname = "newsForm";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "CREATE TABLE news (
	id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	news_title VARCHAR(30),
	news_text TEXT,
	username VARCHAR(20)
	)";

	$conn->close();
	?>
</body>
</html>