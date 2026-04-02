<?php

$pdo = new PDO("mysql:host=localhost;dbname=prototyperéalisation","root","");

require "Article.php";

$article = new Article($pdo);

$article->id = $_GET['id'];
$article->delete();

header("Location: index.php");
exit();