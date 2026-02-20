<?php
require "connexion.php";

try{
    $sql = "SELECT * FROM Utilisateur";
    $stmt = $pdo->query($sql);

    $utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($utilisateur as $user){
        echo (" ID: " . $user['id']  . " -Nom : " . $user['nom'] . " -Email : " . $user['email']);
    }
}catch(PDOException $e){
    echo "Erreur :" . $e->getMessage();
}
?>