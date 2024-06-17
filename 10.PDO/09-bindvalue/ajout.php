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
    $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindValue(':shop_id', $shop_id, PDO::PARAM_INT);

    

//     Dans le code, il est probable que la méthode bindValue() ait été appelée trois fois avec des arguments différents pour le paramètre :nom.

// Chaque appel à bindValue() permet de lier une valeur à un paramètre nommé dans une requête préparée. Les arguments de cette méthode sont :

// Le premier argument est le nom du paramètre dans la requête préparée, ici :nom.
// Le deuxième argument est la valeur que vous souhaitez lier à ce paramètre.
// Le troisième argument est optionnel et permet de préciser le type de donnée de la valeur. Ici, il est défini comme étant une chaîne de caractères (PDO::PARAM_STR).
// Il est possible que dans votre code, la valeur $nom soit utilisée dans plusieurs endroits dans la requête préparée, et donc qu'il soit nécessaire de lier cette valeur à plusieurs paramètres nommés différents. Cela pourrait expliquer pourquoi la méthode bindValue() est appelée trois fois avec le même nom de paramètre :nom.

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