<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $id = $_POST['id'];
    ?>  
      
    <div id="container">
        <div id="contwrap">
            <h1 id="title">Update Row ID <?= $id ?></h1>

            <form action="./php/update.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">

                <label for="firstname" class="labels">Updated First Name:</label>
                <input class="getEntry" type="text" name="firstname" placeholder="Insert your first name"><br>

                <label for="lastname" class="labels">Updated Last Name:</label>
                <input class="getEntry" type="text" name="lastname" placeholder="Insert your last name"><br>

                <label for="number" class="labels">Updated Number:</label>
                <input class="getEntry" type="text" name="number" placeholder="Insert your mobile number"><br>
        
                <input type="submit" value="Submit" class="btns">
            </form>

            <button onClick="window.location.href = './php/disp_data.php'" class="btns">Cancel Row Update</button>

            <p id="creds">by pes18fan, 2022</p>
        </div>        
    </div>
</body>
</html>