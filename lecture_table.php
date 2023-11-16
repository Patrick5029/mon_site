<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tableau HTML à partir de MySQL</title>
</head>
<body>
    <table>
        <tr>
            <th>Latéralité</th>
            <th>Numéro</th>
            <th>Taille</th>
            <th>Puissance</th>
            <th>Utilisateurs</th>
        </tr>
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

// La valeur que vous souhaitez sélectionner
$valeurRecherchee = "G";

// Exécutez une requête SELECT avec une clause WHERE
$query = "SELECT * FROM BASE WHERE Latéralité = '" . mysqli_real_escape_string($connexion, $valeurRecherchee) . "'";
$result = mysqli_query($connexion, $query);

// Vérifiez si la requête s'est exécutée avec succès
if (!$result) {
    die("La requête SELECT a échoué : " . mysqli_error($connexion));
}

// Parcourir les résultats et les insérer dans le tableau HTML
        while ($ligne = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $ligne['Latéralité'] . "</td>";
            echo "<td>" . $ligne['Numéro'] . "</td>";
            echo "<td>" . $ligne['Taille'] . "</td>";
            echo "<td>" . $ligne['Puissance'] . "</td>";
            echo "<td>" . $ligne['Utilisateurs'] . "</td>";
            echo "</tr>";
        }

        // Fermer la connexion à la base de données
        mysqli_close($connexion);
        ?>
    </table>
</body>
</html>
