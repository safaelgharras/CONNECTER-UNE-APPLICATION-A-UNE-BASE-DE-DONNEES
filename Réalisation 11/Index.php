<?php

$pdo = new PDO("mysql:host=localhost;dbname=prototyperéalisation","root","");

require "Article.php";

$article = new Article($pdo);
$articles = $article->read();

?>

<link rel="stylesheet" href="style.css">

<div class="header">
    <h2>Liste des articles</h2>
    <a href="create.php" class="add-btn">+ Ajouter</a>
</div>

<div class="articles-container">

<?php foreach($articles as $a){ ?>

    <div class="card">
        <h3><?php echo $a['titre']; ?></h3>
        <p><?php echo $a['contenu']; ?></p>

        <div class="actions">
            <a href="update.php?id=<?php echo $a['id']; ?>" class="edit">Modifier</a>
            <a href="delete.php?id=<?php echo $a['id']; ?>" class="delete">Supprimer</a>
        </div>
    </div>

<?php } ?>

</div>