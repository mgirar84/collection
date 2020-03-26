<?php include 'dbquery.php';?>
<?php include 'frontendquery.php';?>
<?php include 'userinputquery.php';?>
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
            <form method="post"> 
                <label for="brand">Brand:</label>
                <span class="error">* <?php echo $brandErr;?></span><br>
                    <input type="text" name="brand" id="brand" value="<?php echo $brand;?>" required><br><br>
                <label for="model">Model:</label>
                <span class="error">* <?php echo $modelErr;?></span><br>
                    <input type="text" name="model" id="model" value="<?php echo $model;?>" required><br><br>
                <label for="price">Price:</label>
                <span class="error">* <?php echo $priceErr;?></span><br>
                    <input type="text" name="price" id="price" value="<?php echo $price;?>" required><br><br>
                <label for="type">Type:</label><span class="error">* <?php echo $typeErr;?></span><br>
                <select name="type">
                    <option value="">Select...</option>
                    <option value="Aero">Aero</option>
                    <option value="Climbing">Climbing</option>
                    <option value="Endurance">Endurance</option>
                </select><br><br>
                <label for="picture">Picture:</label>
                <span class="error">* <?php echo $pictureErr;?></span><br>
                    <input type="text" name="picture" id="picture" required>
                <br><br>
                <input class="submitButton" type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>