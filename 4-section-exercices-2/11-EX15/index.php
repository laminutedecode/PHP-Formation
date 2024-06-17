<?php
// Définition des variables
$nom_produit = "Air Max";
$image_produit = "img-1.jpg";
$description_produit = "Une paire de chaussures confortables pour tous les jours.";
$prix_produit = 60;
$quantite = isset($_POST['quantite']) ? $_POST['quantite'] : 1;
$prix_total = $prix_produit * $quantite;
?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $nom_produit ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
<h1><?= $nom_produit ?></h1>
	<img src="<?= $image_produit ?>" alt="Image de la paire de chaussures">
	<div class="content">
	<p><?= $description_produit ?></p>
	<p>Prix unitaire : <?= $prix_produit ?> euros</p>
	<form method="post">
		<label>Quantité :</label>
		<input type="number" name="quantite" value="<?= $quantite ?>" min="1" max="10">
		<input type="submit" value="Ajouter au panier">
	</form>
	<p class="prix">Prix total : <?= $prix_total ?> euros</p>
	</div>
</div>
</body>
</html>
