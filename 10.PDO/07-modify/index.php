<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once('./cnx.php');

$sql = 'SELECT s.shop_id, s.shop_ville, e.emp_id, e.emp_nom, e.emp_prenom 
        FROM shop s 
        INNER JOIN employes e 
        ON s.shop_id = e.shop_id';

$stmt = $pdo->prepare($sql);
$stmt->execute();

?>


<table>
  <tr>
    <th>Shop ID</th>
    <th>Shop Ville</th>
    <th>Employé ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Actions</th>
  </tr>
  <?php while ($donnees = $stmt->fetch()): ?>
    <tr>
      <td><?= $donnees['shop_id'] ?></td>
      <td><?= $donnees['shop_ville'] ?></td>
      <td><?= $donnees['emp_id'] ?></td>
      <td><?= $donnees['emp_nom'] ?></td>
      <td><?= $donnees['emp_prenom'] ?></td>
      <td><a href="./modify.php?id=<?= urlencode($donnees['emp_id']) ?>">Modifier employé</a></td>

    </tr>
  <?php endwhile; ?>
</table>

<a href="./ajout.php">Ajouter un employé</a>

<?php $pdo = null; ?>



    
</body>
</html>