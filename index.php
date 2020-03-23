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
                <img></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 2</h2>
                <img></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
            <div class="collectionItem">
                <h2>Collection Item 3</h2>
                <img></img>
                <ul class="informationList"></ul>
                    <li>Name:</li>
                    <li>Brand:</li>
                    <li>Price:</li>
                    <li>Class:</li>
            </div>
        </div>
        <div class=submitForms>
            <form action="/index.php" method="post"> 
                <label for="brand">Brand:</label><br>
                <input type="text" name="brand">
                <label for="name">Name:</label><br>
                <input type="text" name="name"><br>
                <label for="price">Price:</label><br>
                <input type="text" name="price"><br>
                <label for="type">Type:</label><br>
                <input type="radio" name="type" value="Endurance"><br>
                <label for="type"></label><br>
                <input type="radio" name="type" value="Aero"><br>
                <label for="type"></label><br>
                <input type="radio" name="type" value="Climbing"><br>
                <label for="picture">Picture:</label><br>
                <input type="text" name="picture"><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
