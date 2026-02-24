<?php


require 'connexion.php';

$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->execute([
    'nom' => 'Ayman Akrimat',
    'email' => 'aymanakrimat10@gmail.com'
]);
echo "Utilisateur ajouté.";


$nom = 'Rehab';
$email = 'rehabelgharras@gmail.com';
$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->execute();


$stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE id = ?");
$stmt->execute([1]);

