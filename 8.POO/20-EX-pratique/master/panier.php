<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panier</title>
</head>
<body>
  <?php
  require('./produits.php');

  // Récupération des données envoyées par le formulaire
  $nomProduit = $_POST['nom'];
  $prixProduit = $_POST['prix'];
  $quantiteProduit = $_POST['quantite'];

  // Ajout des données au panier
  Produit::setPanier(Produit::getPanier() + ($prixProduit * $quantiteProduit));

  // Affichage du contenu du panier
  $produit = new Produit();
  $produit->setNom($nomProduit);
  $produit->setPrix($prixProduit);
  $produit->setQuantite($quantiteProduit);

  $produitsDansPanier = [$produit];

  echo "<h1>Contenu du panier :</h1>";
  echo "<table>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Nom du produit</th>";
  echo "<th>Prix</th>";
  echo "<th>Quantité</th>";
  echo "<th>Total</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  foreach ($produitsDansPanier as $produit) {
    echo "<tr>";
    echo "<td>" . $produit->getNom() . "</td>";

    echo "<td>" . $produit->getPrix() . " €</td>";
    echo "<td>" . $produit->getQuantite() . "</td>";
    echo "<td>" . $produit->Calcul() . " €</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";

  ?>
  <a href="index.php">Retour à l'accueil</a>
</body>
</html>
