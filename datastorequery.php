<?php
$db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `model` AS `model` FROM `roadbikes`;');
$query->execute();
$model = $query->fetch();

$query = $db->prepare('SELECT `brand` AS `brand` FROM `roadbikes`;');
$query->execute();
$brand = $query->fetch();

$query = $db->prepare('SELECT `type` AS `type` FROM `roadbikes`;');
$query->execute();
$type = $query->fetch();

$query = $db->prepare('SELECT `price` AS `price` FROM `roadbikes`;');
$query->execute();
$price = $query->fetch();

$query = $db->prepare('SELECT `picture` AS `picture` FROM `roadbikes`;');
$query->execute();
$picture = $query->fetch();
?>