<!DOCTYPE html>
<html>
  <head>
    <title>Majeur ou mineur</title>
  </head>
  <body>
    <form method="post">
      <label>Entrez votre âge :</label>
      <input type="text" name="age">
      <input type="submit" value="Vérifier">
    </form>
    <?php
    if (isset($_POST["age"])) {
      $age = $_POST["age"];
      if ($age >= 18) {
        echo "Vous êtes majeur.";
      } else {
        echo "Vous êtes mineur.";
      }
    }
    ?>
  </body>
</html>
