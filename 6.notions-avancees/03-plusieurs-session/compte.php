<?php
session_start();
if(!isset($_SESSION['nom']) || !isset($_SESSION['age'])) {
    header("Location: formulaire.php");
    exit();
}

$nom = $_SESSION['nom'];
$age = $_SESSION['age'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compte utilisateur</title>
    <style>

        body {
            min-height: 100vh;
            display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            
        }
        table {
            border-collapse: collapse;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
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
</body>
</html>
