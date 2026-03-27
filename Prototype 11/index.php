<?php

$pdo = new PDO("mysql:host=localhost;dbname=prototyperéalisation","root","");

require "article.php";

$article = new Article($pdo);
$articles = $article->read();

?>

<link rel="stylesheet" href="style.css">

<div class="header">
    <h2>Liste des articles</h2>
    <a href="create.php" class="add-btn">+ Ajouter un article</a>
</div>

<div class="articles-container">

<?php foreach($articles as $a){ ?>

    <div class="card">
        <h3><?php echo $a['titre']; ?></h3>
        <p><?php echo $a['contenu']; ?></p>
    </div>

<?php } ?>

</div>