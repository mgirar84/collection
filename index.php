<?php include 'dbquery.php';?>
<?php include 'frontendquery.php';?>
<html lang='en'>
    <head>
        <link rel="stylesheet" href="css.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
        <title>Road Bike Collection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body onTouchStart="">
        <h1>Collection of Road Bikes</h1>
        <div class="collectionContainer">
            <?php displayBike($bikes);?>
        </div>
        <br>
        <div class=submitForms>
            <form action="/index.php" method="post"> 
                <label for="brand">Brand:</label><br>
                <input type="text" name="brand"><br><br>
                <label for="model">Model:</label><br>
                <input type="text" name="model"><br><br>
                <label for="price">Price:</label><br>
                <input type="text" name="price"><br><br>
                <label for="type">Type:</label><br>
                <select name="type">
                    <option value="aero">Aero</option>
                    <option value="climbing">Climbing</option>
                    <option value="endurance">Endurance</option>
                </select><br><br>
                <label for="picture">Picture:</label><br>
                <input type="text" name="picture"><br><br>
                <input class="submitButton" type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>