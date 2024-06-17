

<?php
// Inclure la fonction session_start() pour accéder aux variables de session
session_start();

if(isset($_POST['nom'])) {
    $nom = $_POST['nom'];

    // Définir la variable de session "nom"
    $_SESSION['nom'] = $nom;

    echo "Bonjour " . $nom . ", merci d'avoir rempli le formulaire !";
}
?>
