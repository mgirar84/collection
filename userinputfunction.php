<?php


//function to check if user input matches type
function correctType() : bool{
    return $_POST['type'] == 'Aero' || $_POST['type'] == 'Climbing' || $_POST['type'] == 'Endurance';
}

?>