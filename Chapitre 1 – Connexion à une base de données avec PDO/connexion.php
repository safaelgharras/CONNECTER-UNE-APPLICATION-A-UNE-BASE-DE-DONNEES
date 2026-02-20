<?php 
$host = "localhost";
$dbname = "chapitres";
$user = "root";
$password = "";

try{
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn , $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
    
}catch(PDOException $h){
    echo "Erreur: " . $h->getMessage();
}
?>