<?php
$db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//connect
$query = $db->prepare('SELECT `model`, `brand`, `price`, `type`, `picture` FROM `roadbikes`;');
//execute
$query->execute();
$bikes = $query->fetch();

?>