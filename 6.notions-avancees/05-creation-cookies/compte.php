<?php



session_start();
if(!isset($_SESSION['nom']) || !isset($_SESSION['age'])) {
    header("Location: formulaire.php");
    exit();
}

$nom = $_SESSION['nom'];
$age = $_SESSION['age'];



// création cookie
setcookie("username", $nom, time()+3600, "/", "", false, true);
// "username" : Le nom du cookie.
// $nom : La valeur à stocker dans le cookie. Dans ce cas, c'est la valeur de la variable $nom.
// time()+3600 : La durée de vie du cookie en secondes. Dans ce cas, le cookie expirera dans 3600 secondes, soit 1 heure.
// "/" : Le chemin sur le serveur où le cookie sera disponible. Dans ce cas, le cookie sera disponible à partir de la racine du site.
// "" : Le domaine sur lequel le cookie sera disponible. Dans ce cas, le cookie sera disponible sur tous les domaines.
// false : Si ce paramètre est true, le cookie ne sera envoyé que via une connexion HTTPS. Dans ce cas, le cookie peut être envoyé via une connexion HTTP non sécurisée.
// true : Si ce paramètre est true, le cookie sera accessible uniquement via des scripts PHP et non via des scripts JavaScript. Cela protège le cookie contre les attaques XSS (cross-site scripting).



if (isset($_GET['logout'])) {
    // destruction de la session et redirection vers delete.php
    session_destroy();
    header("Location: delete.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compte utilisateur</title>

</head>
<body>
    <h1>Bienvenue <?php echo $nom; ?> sur votre compte</h1>
    <p>Voici les informations que vous avez saisies :</p>
    <table>
        <tr>
            <th>Nom</th>
            <th>Âge</th>
        </tr>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $age; ?></td>
        </tr>
    </table>

    <a href="?logout=true">Détruire la session</a>
</body>
</html>
