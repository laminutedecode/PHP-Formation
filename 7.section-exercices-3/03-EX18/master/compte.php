<?php
// Démarrer la session
session_start();

// Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
if (!isset($_SESSION['username'])) {
    header('Location: compte.php');
    exit();
}

// Afficher le message de bienvenue
$username = $_SESSION['username'];
echo "Bienvenue, $username !";
?>
