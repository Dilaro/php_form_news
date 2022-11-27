<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav>
		<ul>
		<li><a href="news_form.html">Create News</a></li>
		<li><a href="readnews.php">News</a></li>
		</ul>
	</nav>
	<?php
	include_once 'createdb.php';
	include_once 'createtable.php';

	if (isset($_POST['author']) && isset($_POST['title']) && isset($_POST['text'])) {

		$author = $_POST['author'];
		$title = $_POST['title'];
		$text = $_POST['text'];

		$servername = "localhost";
		$username = "admin";
		$password = "admin";
		$dbname = "newsForm";
		$dbtable = "news";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO $dbtable (news_title, news_text, username) VALUES ('{$title}', '{$text}', '{$author}')";

		if ($conn->query($sql) === TRUE){
			echo "New record created successfully";
		} else {
			echo "Error: " . $conn->error;
		}
	}

	$conn->close();
	?>
</body>
</html>