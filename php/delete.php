<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Record Deleted</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "connect.php";

        $id = $_POST['id'];

        $sql_query = "DELETE FROM my_table WHERE id=$id";

        try {
            mysqli_query($conn, $sql_query);
            echo "<p class=\"labels\">Record deleted succesfully!</p><br>";
        } catch (exception $e) {
            echo "<p class=\"labels\">Deletion error:</p> <br>". $e . "<br>";
        }
    ?>

    <button onClick="window.location.href = './disp_data.php'">View Data</button>

    <p style="text-align: left;" id="creds">by pes18fan, 2022</p>
</body>
</html>