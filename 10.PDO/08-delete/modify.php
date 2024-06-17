<?php

require_once('./cnx.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérification que le formulaire a été soumis

    // Récupération des données du formulaire
    $emp_id = $_POST['emp_id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $shop_id = $_POST['shop_id'];

    // Requête SQL pour mettre à jour les informations de l'employé
    $sql = 'UPDATE employes SET emp_nom = :nom, emp_prenom = :prenom, shop_id = :shop_id WHERE emp_id = :emp_id';
    $stmt = $pdo->prepare($sql);

    // Assignation des valeurs aux paramètres de la requête
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':shop_id', $shop_id);
    $stmt->bindParam(':emp_id', $emp_id);

    // Exécution de la requête
    $stmt->execute();

    // Redirection vers la page affichant la liste des employés
    header('Location: index.php');
    exit;
}

// Récupération de l'identifiant de l'employé à modifier
$emp_id = $_GET['id'];

// Requête SQL pour récupérer les informations de l'employé
$sql = 'SELECT * FROM employes WHERE emp_id = :emp_id';
$stmt = $pdo->prepare($sql);

// Assignation de la valeur au paramètre de la requête
$stmt->bindParam(':emp_id', $emp_id);

// Exécution de la requête
$stmt->execute();

// Récupération des données de l'employé
$donnees = $stmt->fetch();


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
  <input type="text" name="nom" value="<?php echo $donnees['emp_nom']; ?>"><br>
  <label>Prénom :</label><br>
  <input type="text" name="prenom" value="<?php echo $donnees['emp_prenom']; ?>"><br>
  <label>Shop ID :</label><br>
  <input type="number" name="shop_id" value="<?php echo $donnees['shop_id']; ?>"><br>
  <input type="hidden" name="emp_id" value="<?php echo $donnees['emp_id']; ?>">
  <input type="submit" value="Modifier">
</form>




</body>
</html>