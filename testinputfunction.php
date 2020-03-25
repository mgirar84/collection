<?php
// define variables and set to empty values
$brandErr = $modelErr = $priceErr = $pictureErr = "";
$brand = $model = $type = $price = $picture = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["brand"])) {
        $brandErr = "Brand is required";
    } else {
        $brand = test_input($_POST["brand"]);
        
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$brand)) {
            $brandErr = "Only letters and white space allowed";
        }
      }
      
    if (empty($_POST["model"])) {
        $modelErr = "Model is required";
    } else {
        $model = test_input($_POST["model"]);
      }

    if (empty($_POST["price"])) {
        $priceErr = "Price is required";
    } else {
        $price = test_input($_POST["price"]);

        //check if price is a whole number
        if (preg_match('/^[1-9][0-9]{0,15}$/', $price)) {
            $priceErr = "Must be a whole number";
        }
      }
  
    if (empty($_POST["picture"])) {
        $pictureErr = "URL is required";
   } else {
        $picture = test_input($_POST["picture"]);

        // check if URL address syntax is valid (also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$picture)) {
            $pictureErr = "Invalid URL"; 
        }
   }
    
    $type = test_input($_POST["type"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>