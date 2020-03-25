<?php

// Handle a collection of bikes
function displayBike (Array $bikes) {
    foreach ($bikes as $bike) {
        $brand = $bike['brand'];
        $model = $bike['model'];
        $price = $bike['price'];
        $type = $bike['type'];
        $picture = $bike ['picture'];
        createItem ($brand, $model, $price, $type, $picture);
    }
}



// Handles a single bike
function createItem (String $brand, String $model, Int $price, String $type, String $picture) {
        echo '<div class="collectionItem">';
            echo '<h2>' . $brand . ' ' . $model . '</h2>';
            echo '<img class="collectionImage" src="' . $picture . '"></img>';
            echo '<ul class="informationList">';
                echo '<li>Model: ' . $model . '</li>';
                echo '<li>Brand: ' . $brand . '</li>';
                echo '<li>Price: £' . $price . '</li>';
                echo '<li>Class: ' . $type . '</li>';
            echo '</ul>';
        echo '</div>';
}







?>
