<?php

$pdo = new PDO("mysql:host=localhost;dbname=prototyperéalisation","root","");

require "article.php";

$article = new Article($pdo);

if($_POST){
    $article->titre = $_POST['titre'];
    $article->contenu = $_POST['contenu'];

    $article->create();

    header('Location: index.php');
    exit();
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">

<h2>s'il vous plait ajouter un article</h2>

<form method="POST">

<label>Titre</label>
<input type="text" name="titre">

<label>Contenu</label>
<textarea name="contenu"></textarea>

<button type="submit">Envoyer</button>

</form>

</div>
