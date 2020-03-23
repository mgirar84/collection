<html lang='en'>
    <head>
        <link rel="stylesheet" href="css.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
        <title>Road Bike Collection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body onTouchStart="">
        <h1>Collection of Road Bikes</h1>
        <div class="collectionContainer1">
            <div class="collectionItem">
                <h2>Collection Item 1</h2>
                <img class="collectionImage" src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList">
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
                </ul>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 2</h2>
                <img class="collectionImage" src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList">
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
                </ul>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 3</h2>
                <img class="collectionImage" src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList">
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
                </ul>
            </div>
        </div>
        <div class="collectionContainer2">
            <div class="collectionItem">
                <h2>Collection Item 4</h2>
                <img class="collectionImage" src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList">
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
                </ul>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 5</h2>
                <img class="collectionImage" src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList">
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
                </ul>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 6</h2>
                <img class="collectionImage" src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList">
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
                </ul>
            </div>
        </div>
        <br>
        <div class=submitForms>
            <form action="/index.php" method="post"> 
                <label for="brand">Brand:</label><br>
                <input type="text" name="brand"><br><br>
                <label for="name">Name:</label><br>
                <input type="text" name="name"><br><br>
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
