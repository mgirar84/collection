<?php

$dbName = 'mysql:host=db; dbname=collection';
$myUsername = 'root';
$myPassword = 'password';
$pdoFetchMode = PDO::ATTR_DEFAULT_FETCH_MODE;
$pdoFetchType = PDO::FETCH_ASSOC;

//connect
function connectDB ($dbName, $username, $password, $fetchMode, $fetchType) {
    $db = new PDO($dbName, $username, $password);
    $db->setAttribute($fetchMode, $fetchType);
    return $db;
}

//return is stored left
$db = connectDB ($dbName, $myUsername, $myPassword, $pdoFetchMode, $pdoFetchType);

//select
$query = $db->prepare('SELECT `model`, `brand`, `price`, `type`, `picture` FROM `roadbikes`;');

//execute
$query->execute();
$bikes = $query->fetchAll();
?>