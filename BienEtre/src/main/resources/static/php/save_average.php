/**
 * Ce fichier PHP est utilisé pour enregistrer les moyennes de bien-être dans la base de données.
 */


<?php
session_start();

require("loginBD.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $averages = json_decode($_POST["averages"], true);

    // Utilisez l'identifiant stocké dans la session
    $identifiant = $_SESSION["identifiant"];

    $_SESSION['score'] = 0;
    // Mettez à jour les attributs spécifiques dans la table bienetreuser
    foreach ($averages as $theme => $average) {
        $_SESSION['score'] += $average;
        $stmt = $dbh->prepare("UPDATE bienetreuser SET $theme = ? WHERE identifiant = ?");
        $stmt->execute([$average, $identifiant]);
        $stmt->closeCursor();
    }
    $_SESSION['score'] /= 4;
    header("Location: mail.php");
}
?>
