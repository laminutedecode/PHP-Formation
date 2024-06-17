<?php
session_start();

$nom = 	$_SESSION['nom'];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Compte</title>
</head>
<body>
  <h1>Hello <?= $nom; ?></h1>

  <a href="index.php"></a>
</body>
</html>
