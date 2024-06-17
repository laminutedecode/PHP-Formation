<?php


require('./produits.php')

;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boutiques</title>
</head>
<body>


<?php
$produits = [
  ['nom' => 'Télévision', 'prix' => 1200, 'image' => 'television.jpg'],
  ['nom' => 'Ordinateur', 'prix' => 750, 'image' => 'ordinateur.jpg'],
  ['nom' => 'Téléphone', 'prix' => 220, 'image' => 'telephone.jpg']
];
?>
<div class="container">
  <?php foreach($produits as $produit): ?>
    <div class="card">

      <h3><?php echo $produit['nom']; ?></h3>
      <p>Prix : <?php echo $produit['prix']; ?> €</p>
      <form action="panier.php" method="post">
        <input type="hidden" name="nom" value="<?php echo $produit['nom']; ?>">
        <input type="hidden" name="prix" value="<?php echo $produit['prix']; ?>">
        <label for="quantite-<?php echo $produit['nom']; ?>">Quantité :</label>
        <input type="number" id="quantite-<?php echo $produit['nom']; ?>" name="quantite" min="1" max="10" value="1">
        <input type="submit" value="Ajouter au panier">
      </form>
    </div>
  <?php endforeach; ?>
</div>

    
</body>
</html>