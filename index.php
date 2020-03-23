<html lang='en'>
    <head>
        <link rel="stylesheet" href="css_stylesheet.css">
        <title>Road Bike Collection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body onTouchStart="">
        <h1>Collection of Road Bikes</h1>
        <div class="collectionContainer1">
            <div class="collectionItem">
                <h2>Collection Item 1</h2>
                <img class=collectionImage src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 2</h2>
                <img class=collectionImage src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 3</h2>
                <img class=collectionImage src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
        </div>
        <div class="collectionContainer2">
            <div class="collectionItem">
                <h2>Collection Item 4</h2>
                <img class=collectionImage src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 5</h2>
                <img class=collectionImage src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 6</h2>
                <img class=collectionImage src="https://dbyvw4eroffpi.cloudfront.net/product-media/2L9M/1000/1000/Cannondale-SystemSix-Carbon-Ultegra-Di2-Disc-Road-Bike-2020.jpg"></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
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
                <input type="radio" name="type" value="Endurance">
                <label for="type">Endurance</label><br>
                <input type="radio" name="type" value="Aero">
                <label for="type">Aero</label><br>
                <input type="radio" name="type" value="Climbing">
                <label for="type">Climbing</label><br><br>
                <label for="picture">Picture:</label><br>
                <input type="text" name="picture"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
