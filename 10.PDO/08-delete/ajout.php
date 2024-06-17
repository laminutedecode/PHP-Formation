<?php

require_once('./cnx.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérification que le formulaire a été soumis

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $shop_id = $_POST['shop_id'];

    // Requête SQL pour insérer un nouvel employé
    $sql = 'INSERT INTO employes (emp_nom, emp_prenom, shop_id) VALUES (:nom, :prenom, :shop_id)';
    $stmt = $pdo->prepare($sql);

    // Assignation des valeurs aux paramètres de la requête
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':shop_id', $shop_id);

    // Exécution de la requête
    $stmt->execute();

    // Redirection vers la page affichant la liste des employés
    header('Location: index.php');
    exit;
}


$pdo = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <label>Nom :</label><br>
    <input type="text" name="nom"><br>
    <label>Prénom :</label><br>
    <input type="text" name="prenom"><br>
    <label>Shop ID :</label><br>
    <input type="number" name="shop_id"><br>
    <input type="submit" value="Ajouter">
</form>

</body>
</html>