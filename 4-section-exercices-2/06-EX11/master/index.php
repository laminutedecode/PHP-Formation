<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulaire de saisie de prix</title>
</head>
<body>
  <form method="post" action="">
    <label for="prix">Entrez le prix du produit :</label>
    <input type="number" id="prix" name="prix" min="0" step="1" required>
    <input type="submit" value="Afficher le prix">
  </form>

  <?php
  if (isset($_POST['prix']) && is_numeric($_POST['prix']) && floor($_POST['prix']) == $_POST['prix']) {
    $prix = $_POST['prix'];

    if ($prix >= 0 && $prix < 10) {
      echo "<p>Le prix du produit est inférieur à 10€.</p>";
    } else if ($prix >= 10 && $prix < 20) {
      echo "<p>Le prix du produit est compris entre 10€ et 20€.</p>";
    } else if ($prix >= 20 && $prix < 30) {
      echo "<p>Le prix du produit est compris entre 20€ et 30€.</p>";
    } else {
      echo "<p>Le prix du produit est supérieur à 30€.</p>";
    }
  } else if (isset($_POST['prix'])) {
    echo "<p>Veuillez entrer un prix entier positif.</p>";
  }
  ?>
</body>
</html>
