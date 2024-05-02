<?php
session_start();

require("loginBD.php");

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username_login = $_POST["username_login"];
    $password_login = $_POST["password_login"];

    // Récupérer le mot de passe de l'utilisateur depuis la base de données
    $stmt = $dbh->prepare("SELECT mdp,email FROM bienetreuser WHERE identifiant = ?");
    $stmt->execute([$username_login]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $mdp = $row['mdp'];
    $email = $row['email'];

    $stmt->closeCursor();

    // Vérifier si le mot de passe saisi correspond au mot de passe stocké (utilisez la fonction password_verify)
    if (password_verify($password_login, $mdp)) {

        // L'utilisateur est connecté
        $_SESSION["connexionReussie"] = true;
        $_SESSION["identifiant"] = $username_login; // Ajout de cette ligne pour stocker l'identifiant dans la session
        $_SESSION["email"] = $email;
        header("Location: profil.php");
        exit(); // Arrête l'exécution du script après la redirection
    } else {
        // Nom d'utilisateur ou mot de passe incorrect
        $_SESSION["erreurConnexion"] = "Nom d'utilisateur ou mot de passe incorrect. Veuillez réessayer.";
        header("Location: index.php");
        exit();
    }

} else {
    // Ajoutez ce bloc else pour afficher les erreurs potentielles
    echo "Erreur: Aucune méthode POST détectée.";
}

?>
