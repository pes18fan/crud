<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Display</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <div id="tableContainer">
        <div id="contwrap">
            <?php
                include_once 'connect.php';

                $sql_query = "SELECT * FROM my_table";

                try {
                    $ret_val = mysqli_query($conn, $sql_query);
                    echo "<p class=\"labels\">Data retrieved successfully.</p><br>";
                } catch (exception $e) {
                    echo "<p class=\"labels\">Error fetching data from database</p><br>". $e->getMessage();
                }
            ?>

            <h1 id="title">Database entries:</h1>

            <table border="1" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>NUMBER</th>
                    <th>ACTIONS</th>
                </tr>

                <?php
                    if(mysqli_num_rows($ret_val) > 0) {
                        while ($row = mysqli_fetch_assoc($ret_val)) {
                ?> 

                <tr>
                    <td> <?= $row['id'] ?> </td>
                    <td> <?= $row['lastname'] . ", " . $row['firstname'] ?> </td>
                    <td> <?= $row['mnumber'] ?> </td>

                    <td id="dataModBtns"><form method="post" action="../update_row.php">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="submit" value="Update" class="actionButton">
                    </form>
                    <form method="post" action="./delete.php">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="submit" value="Delete" class="actionButton">
                    </form></td>
                </tr>
        
                <?php
                        }
                    }
                ?>

            </table>
            <br>
            <button onClick="window.location.href='../index.html'" class="altBtns">Insert an entry</button>

            <p id="creds">by pes18fan, 2022</p>
        </div>
    </div>
</body>
</html>