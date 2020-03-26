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
        echo '<div class="collectionItem">'
            . '<h2>' . $brand . ' ' . $model . '</h2>'
            . '<img class="collectionImage" src="' . $picture . '"alt="'. $brand . ' ' . $model . '">'
            . '<ul class="informationList">'
                . '<li>Model: ' . $model . '</li>'
                . '<li>Brand: ' . $brand . '</li>'
                . '<li>Price: £' . $price . '</li>'
                . '<li>Class: ' . $type . '</li>'
            . '</ul>'
        . '</div>';
}

?>
