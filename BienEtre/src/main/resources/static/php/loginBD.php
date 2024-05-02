<?php // Connexion à MySQL
// Inclure le code de connexion à la base de données
$user="root";$password="";
try{
	$dbh = new PDO('mysql:host=localhost;     
		dbname=bienetre; charset=UTF8', $user, $password,   // PDO se conncete au serveur mysql et prend les variables $user et $password pour se co 
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,));

} catch(PDOException $e){      // prend les erreurs et les stocks dans e 
	echo $e->getMessage();
	die("Connexion impossible !");
}

?>
