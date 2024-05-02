<?php
session_start();

require("loginBD.php");

// Récupérez le thème depuis la requête
$theme = $_GET['theme'];

// Récupérez les questions pour un thème donné
$sql = "SELECT * FROM bienetrequestions WHERE theme = ? ";
$stmt = $dbh->prepare($sql);
$stmt->execute([$theme]);

$questions = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $questions[] = $row;
}

// Retournez les questions au format JSON
echo json_encode($questions);

// Fermez la connexion
$dbh = null;
?>
