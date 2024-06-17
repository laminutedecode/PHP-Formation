<?php

// informations d'identification pour la base de données
$host = 'localhost'; // adresse du serveur de la base de données
$dbname = 'nom_de_la_base_de_donnees'; // nom de la base de données
$username = 'nom_d_utilisateur'; // nom d'utilisateur pour accéder à la base de données
$password = 'mot_de_passe'; // mot de passe pour accéder à la base de données

// options pour la connexion PDO
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // lancer une exception pour les erreurs de base de données
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // récupérer les résultats sous forme de tableaux associatifs
);

try {
    // initialisation de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, $options);
    // exécution de requêtes SQL à travers l'objet PDO $pdo
} catch(PDOException $e) {
    // gestion des erreurs de connexion PDO
    echo 'Erreur de connexion : ' . $e->getMessage();
}



?>