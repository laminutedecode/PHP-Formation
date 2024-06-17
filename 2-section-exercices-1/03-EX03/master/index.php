<!DOCTYPE html>
<html>
  <head>
    <title>Mentions</title>
  </head>
  <body>
    <form method="post">
      <label>Entrez votre note :</label>
      <input type="number" name="note" min="0" max="20" step="0.01">
      <input type="submit" value="Vérifier">
    </form>
    <?php
    if (isset($_POST["note"])) {
      $note = $_POST["note"];
      if ($note >= 16) {
        echo "Mention : A";
      } elseif ($note >= 14 && $note < 16) {
        echo "Mention : B";
      } elseif ($note >= 12 && $note < 14) {
        echo "Mention : C";
      } elseif ($note >= 10 && $note < 12) {
        echo "Mention : D";
      } else {
        echo "Mention : E";
      }
    }
    ?>
  </body>
</html>
