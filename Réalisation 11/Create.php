<?php

$pdo = new PDO("mysql:host=localhost;dbname=prototyperéalisation","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require "Article.php";

$article = new Article($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $article->titre = htmlspecialchars($_POST['titre']);
    $article->contenu = htmlspecialchars($_POST['contenu']);

    $article->create();

    header("Location: index.php");
    exit();
}
?>
<link rel="stylesheet" href="Style.css">

<h2>Ajouter un article</h2>

<div class="container">

<form method="POST">
    <input type="text" name="titre" placeholder="Titre"><br><br>
    <textarea name="contenu"></textarea><br><br>
    <button>Ajouter</button>
</form>

</div>