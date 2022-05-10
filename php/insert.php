<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entry Added</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "connect.php";

        $id = rand(0, 99); 

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $number = $_POST['number'];

        if ($firstname != "" && $lastname != "" && $number != "") {
            $mysqli_query = "INSERT INTO my_table(id,firstname,lastname,mnumber) VALUES('$id', '$firstname','$lastname','$number')";

            try {
                mysqli_query($conn, $mysqli_query);
                echo "<p class=\"labels\">Data inserted successfully!</p><br>";
            } catch (exception $e) {
                echo "<p class=\"labels\">Data insertion error:</p> <br>" . $e. "<br>";
            }
        } else {
            echo "<p class=\"labels\">ERROR: One or more of the data entries to insert is empty.</p><br>";
        }
    ?>

    <button onClick="window.location.href = './disp_data.php'">View Data</button>

    <p style="text-align: left" id="creds">by pes18fan, 2022</p>
</body>
</html>