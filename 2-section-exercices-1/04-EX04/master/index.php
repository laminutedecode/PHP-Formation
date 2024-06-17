<!DOCTYPE html>
<html>
  <head>
    <title>Fonctions mathématiques</title>
  </head>
  <body>
    <form method="post">
      <label>Entrez un nombre :</label>
      <input type="number" name="nombre">
      <input type="submit" value="Calculer">
    </form>
    <?php
    if (isset($_POST["nombre"])) {
      $nombre = $_POST["nombre"];
      $racine_carree = sqrt($nombre);
      $carre = pow($nombre, 2);
      echo "<p>Le carré de $nombre est $carre.</p>";
      echo "<p>La racine carrée de $nombre est $racine_carree.</p>";
    }
    ?>

<!-- Dans cette version, une balise form est utilisée avec la méthode post pour permettre à l'utilisateur d'entrer un nombre. Lorsque l'utilisateur soumet le formulaire en cliquant sur le bouton "Calculer", la variable $_POST["nombre"] est utilisée pour récupérer le nombre entré dans l'input. Ensuite, la fonction sqrt() est utilisée pour calculer la racine carrée du nombre, et la fonction pow() est utilisée pour calculer le carré du nombre. Les résultats sont ensuite affichés dans la page à l'aide de balises p. -->
  </body>
</html>
