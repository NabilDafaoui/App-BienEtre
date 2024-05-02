<?php
require("loginBD.php");

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hasher le mot de passe

    // Insérer l'utilisateur dans la base de données
    $stmt = $dbh->prepare("INSERT INTO bienetreuser (identifiant, mdp) VALUES (?, ?)");
    $stmt->execute([$username, $password]);
    $stmt->closeCursor();

    echo "Inscription réussie !";
}
?>
