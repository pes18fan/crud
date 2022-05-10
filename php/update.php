<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Record Updated</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once "connect.php";

        $id = $_POST['id'];

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $number = $_POST['number'];

        if ($firstname != "" && $lastname != "" && $number != "") {
            $sql_query = "UPDATE my_table SET firstname='$firstname', lastname='$lastname', mnumber='$number' WHERE id='$id'";

            try {
                mysqli_query($conn, $sql_query);
                echo "<p class=\"labels\">Record updated succesfully!</p><br>";
            } catch (exception $e) {
                echo "<p class=\"labels\">Error while updating record</p> <br>". $e . "<br>";
            }
        } else {
            echo "<p class=\"labels\">ERROR: One or more of the data entries is empty.</p><br>";
        }
    ?>

    <button onClick="window.location.href = './disp_data.php'">View Data</button>

    <p style="text-align: left;" id="creds">by pes18fan, 2022</p>
</body>
</html>