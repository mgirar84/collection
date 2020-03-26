<?php include 'dbquery.php';?>
<?php include 'frontendquery.php';?>
<?php include 'testinputfunction.php';?>
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
            <p><span class="error">* required field</span></p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
                <label for="brand">Brand:</label>
                <span class="error">* <?php echo $brandErr;?></span><br>
                <input type="text" name="brand" value="<?php echo $brand;?>"><br><br>
                <label for="model">Model:</label>
                <span class="error">* <?php echo $modelErr;?></span><br>
                <input type="text" name="model" value="<?php echo $model;?>"><br><br>
                <label for="price">Price:</label>
                <span class="error">* <?php echo $priceErr;?></span><br>
                <input type="text" name="price" value="<?php echo $price;?>"><br><br>
                <label for="type">Type:</label><br>
                <select name="type">
                    <option value="Aero">Aero</option>
                    <option value="Climbing">Climbing</option>
                    <option value="Endurance">Endurance</option>
                </select><br><br>
                <label for="picture">Picture:</label>
                <span class="error">* <?php echo $pictureErr;?></span><br>
                <input type="text" name="picture">
                <br><br>
                <input class="submitButton" type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>