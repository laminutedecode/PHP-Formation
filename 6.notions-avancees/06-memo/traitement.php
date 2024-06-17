<?php
session_start();

if(isset($_POST['nom']) && isset($_POST['age'])) {
    $nom = $_POST['nom'];
    $age = $_POST['age'];

    $_SESSION['nom'] = $nom;
    $_SESSION['age'] = $age;

    echo "Bonjour " . $nom . "<br><br>";

    echo "Cliquez <a href='compte.php'>ici</a> pour accéder à votre compte.";
}

?>
