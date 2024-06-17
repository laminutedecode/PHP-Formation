<?php

// informations d'identification pour la base de données
$host = 'localhost'; // adresse du serveur de la base de données
$dbname = 'shops'; // nom de la base de données
$username = 'root'; // nom d'utilisateur pour accéder à la base de données
$password = ''; // mot de passe pour accéder à la base de données

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

// nous avons défini les informations d'identification pour la base de données, qui comprennent l'adresse du serveur de la base de données, le nom de la base de données, le nom d'utilisateur et le mot de passe.

// Nous avons également défini des options pour la connexion PDO, qui incluent le fait de lancer une exception pour les erreurs de base de données et de récupérer les résultats sous forme de tableaux associatifs.

// Nous avons ensuite initialisé la connexion PDO en utilisant les informations d'identification et les options définies. Cette étape est importante car elle établit une connexion à la base de données et retourne un objet PDO que nous pouvons utiliser pour exécuter des requêtes SQL.

// La gestion d'erreur de connexion est réalisée à l'aide d'un bloc try/catch. Le code qui peut générer une erreur est placé dans le bloc try, tandis que la gestion de l'erreur est placée dans le bloc catch.

// Dans l'exemple de code, la tentative de connexion PDO est placée dans le bloc try. Si une erreur se produit lors de la connexion, une exception PDOException est levée. Le code d'erreur est récupéré à l'aide de la méthode getMessage() de l'objet PDOException et est affiché à l'utilisateur.

// La gestion d'erreur est une partie importante de la programmation, car elle permet de détecter et de résoudre les erreurs qui se produisent pendant l'exécution d'un programme. Dans le cas de la gestion d'erreur de connexion PDO, elle permet de détecter les erreurs qui se produisent lors de l'établissement d'une connexion à la base de données, ce qui est essentiel pour assurer le bon fonctionnement de l'application.


?>