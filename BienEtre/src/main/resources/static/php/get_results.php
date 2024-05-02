<?php
session_start();

require("loginBD.php");

// Utilisez l'identifiant stocké dans la session
$identifiant = $_SESSION["identifiant"];

// Récupérez les attributs spécifiques depuis la table bienetreuser
$sql = "SELECT santé, professionnel, social, financier FROM bienetreuser WHERE identifiant = ?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$identifiant]);

$results = $stmt->fetch(PDO::FETCH_ASSOC);

// Retournez les résultats au format JSON
echo json_encode($results);

// Fermez la connexion
$dbh = null;
?>
