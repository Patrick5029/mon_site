<?php
// Paramètres de connexion
$serveur = "localhost"; // L'adresse du serveur MySQL
$utilisateur = "userExample"; // Le nom d'utilisateur MySQL
$motDePasse = "mot_de_passe"; // Le mot de passe MySQL
$baseDeDonnees = "example"; // Le nom de la base de données

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier si la connexion a réussi
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Vous pouvez maintenant exécuter des requêtes SQL en utilisant cette connexion.

// Fermez la connexion lorsque vous avez terminé.
mysqli_close($connexion);
?>

