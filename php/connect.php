<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Connected</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        body {
            background: rgb(51, 51, 51);
            color: rgb(211, 216, 216);
        }
    </style>
</head>
<body>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "comp_proj";

        try {
            $conn = mysqli_connect($host, $username, $password, $dbname);
            echo "<p style=\"font-family: 'Ubuntu', sans-serif; font-size: 15px;\">Connected successfully!</p><br>";
        } catch (exception $e) {
            echo "<p style=\"font-family: 'Ubuntu', sans-serif; font-size: 15px;\">Failed to connect to database: </p><br>" . $e;
        }
    ?>
</body>
</html>

<!-- by pes18fan, 2022 -->