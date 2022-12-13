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
    $dbtable = "news";

    function connectDb(){
        global $servername, $username, $password, $dbname, $conn;

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    function connectClose(){
        global $conn;

        $conn->close();
    }
    ?>
</body>
</html>