<?php

$pdo = new PDO("mysql:host=localhost;dbname=prototyperéalisation","root","");

require "Article.php";

$article = new Article($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $article->id = $_POST['id'];
    $article->titre = $_POST['titre'];
    $article->contenu = $_POST['contenu'];

    $article->update();

    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM articles WHERE id=$id");
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="Style.css">

<h2>Modifier article</h2>

<div class="container">

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="text" name="titre" value="<?php echo $data['titre']; ?>"><br><br>
    <textarea name="contenu"><?php echo $data['contenu']; ?></textarea><br><br>
    <button>Modifier</button>
</form>

</div>