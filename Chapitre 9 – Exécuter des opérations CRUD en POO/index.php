<?php

require "Database.php";
require "user.php";

$database = new database();
$db = $database->getConnection();

$user = new User($db);
$user->nom = "Ayman";
$user->email = "ayman123@gmail.com";
$user->create();

$liste = $user->read();
foreach ($liste as $u){
    echo $u['nom']. " - " .$u['email'] . "<br>";
}