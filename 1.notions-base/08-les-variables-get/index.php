<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, les variables GET sont des variables qui contiennent les données envoyées via une URL. Les données sont stockées dans la chaîne de requête de l'URL, qui commence par le symbole "?" suivi du nom de la variable et de sa valeur, séparés par le symbole "=". Les différentes variables sont ensuite séparées par le symbole "&".

Voici un exemple d'URL contenant des variables GET : -->

http://example.com/page.php?nom=Jean&age=25

<!-- Dans cet exemple, la chaîne de requête contient deux variables GET : "nom" avec la valeur "Jean" et "age" avec la valeur "25".

Pour récupérer les données envoyées via des variables GET, il faut utiliser les variables spéciales $_GET["nom"] et $_GET["age"]. Par exemple : -->

<?php
$nom = $_GET["nom"];
$age = $_GET["age"];


?>




<form action="traitement.php" method="GET">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">

    <label for="email">Email :</label>
    <input type="email" id="email" name="email">

    <input type="submit" value="Envoyer">
</form>




</body>
</html>