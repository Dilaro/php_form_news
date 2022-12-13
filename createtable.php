<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<?php
    require 'conntodb.php';

    connectDb();

	$sql = "CREATE TABLE news (
	id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	news_title VARCHAR(30),
	news_text TEXT,
	username VARCHAR(20)
	)";

    connectClose();
	?>
</body>
</html>