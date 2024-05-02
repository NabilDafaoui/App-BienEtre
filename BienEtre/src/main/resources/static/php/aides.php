<?php

// Assume you have a database connection established
// Include your database connection code here
// For example, include a file with the connection details: include 'db_connection.php';

// Get the averages from the POST request
$averages = json_decode($_POST['averages'], true);

// Store the averages in the database (modify this part according to your database structure)
foreach ($averages as $theme => $average) {
    // Use prepared statements to prevent SQL injection
    $stmt = $pdo->prepare("INSERT INTO averages (theme, average) VALUES (:theme, :average)");
    $stmt->bindParam(':theme', $theme);
    $stmt->bindParam(':average', $average);
    $stmt->execute();
}

// Provide suggestions based on the averages
displaySuggestions($averages);

function displaySuggestions($averages) {
    // Social Theme Suggestions
    $socialAverage = $averages['social'];
    if ($socialAverage >= 4.5) {
        echo "Félicitations! Votre intégration sociale est excellente. Continuez à participer activement.";
    } elseif($socialAverage>=4 && $socialAverage <4.5 ){
        echo "Vous êtes bien intégré(e) socialement. Considérez la possibilité de participer à davantage d'événements sociaux ou de clubs pour approfondir ces liens.";
    } elseif ($socialAverage >= 3 && $socialAverage <4 ) {
        echo "vous gérez pour rester connecté(e), mais il y a des opportunités pour renforcer vos liens avec d'autres étudiants.";
    } else {
        echo "Il pourrait être bénéfique de recherchez t rejoignez des clubs ou des événements pour améliorer votre participation et votre inclusion. Engagez-vous activement avec des groupes diversifiés et assistez à des événements qui favorisent l'inclusivité.";
    }
    
    // Financier Theme Suggestions
    $financierAverage = $averages['financier'];
    if ($financierAverage >= 4) {
        echo "Vous avez une bonne maîtrise de vos finances. Continuez à suivre votre budget.";
    } elseif ($financierAverage >= 3 && $financierAverage < 4) {
        echo "Il pourrait être utile de réviser votre budget et chercher des opportunités pour améliorer votre planification financière.";
    } elseif ($financierAverage >= 2 && $financierAverage < 3) {
        echo "valuez vos dépenses et identifiez des domaines où vous pouvez réduire les coûts. La création d'un budget détaillé peut être bénéfique.";
    } else {
        echo "Considérez sérieusement la création d'un budget pour mieux gérer vos finances.";
    }

    // Ajoutez des suggestions similaires pour les thèmes physique et professionnel en fonction de vos critères.

    // Physique Theme Suggestions
    $physiqueAverage = $averages['physique'];
    if ($physiqueAverage >= 4) {
        echo "Vous maintenez un bon équilibre physique. Continuez à accorder de l'importance à votre bien-être physique.";
    } elseif ($physiqueAverage >= 3 && $physiqueAverage < 4) {
        echo "Explorez des habitudes de sommeil plus saines et envisagez d'ajouter des activités physiques régulières à votre routine.";
    } elseif ($physiqueAverage >= 2 && $physiqueAverage < 3) {
        echo "Trouvez des moments de détente et des activités apaisantes pour réduire le stress quotidien.";
    } else {
        echo "La qualité de votre sommeil et votre niveau d'énergie peuvent bénéficier d'une attention particulière. Consultez les ressources disponibles sur le campus.";
    }

    // Professionnel Theme Suggestions
    $professionnelAverage = $averages['professionnel'];
    if ($professionnelAverage >= 4.5) {
        echo "Votre satisfaction professionnelle est élevée. Continuez à vous investir dans votre études.";
    } elseif ($professionnelAverage >= 3 && $professionnelAverage < 4.5) {
        echo "Vous avez un équilibre décent, mais assurez-vous de prendre suffisamment de temps pour vous détendre et vous ressourcer.|| Des opportunités décentes, mais recherchez des moyens d'élargir vos compétences ou vos connaissances.";
    } elseif ($professionnelAverage >= 2 && $professionnelAverage < 3) {
        echo "Réévaluez votre emploi du temps pour créer un meilleur équilibre entre vos engagements professionnels et personnels.";
    } else {
        echo "Il peut être bénéfique de discuter de vos préoccupations professionnelles/académiques avec un conseiller de carrière ou un mentor.";
    }
}
?>
