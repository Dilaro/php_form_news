<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
    require 'conntodb.php';

    connectDb();
    global $conn, $dbtable;

    $sql = "SELECT news_title, news_text, username FROM $dbtable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h3>" . $row["news_title"] . "</h3><br>" .
                "<p>" . $row["news_text"] . "</p><br><br>" .
                "Author: <b>" . $row["username"] . "</b><br><br><br>" .
                "<hr>";
        }
    }

    connectClose();
    ?>
</body>
</html>