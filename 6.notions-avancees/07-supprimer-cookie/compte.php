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

// récupere le cookie
$nom = isset($_COOKIE['username']) ? $_COOKIE['username'] : $nom;

if (isset($_GET['logout'])) {


    // supprimer le cookie
    setcookie("username", "", time()-3600, "/", "", false, true);

    
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
