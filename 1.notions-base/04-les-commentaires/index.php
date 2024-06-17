<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, les commentaires sont utilisés pour ajouter des notes ou des explications dans le code qui ne seront pas interprétées par le serveur Web lors de l'exécution. Les commentaires sont utiles pour documenter le code, expliquer la logique et faciliter la compréhension du code par d'autres programmeurs.

Il y a deux façons de créer des commentaires en PHP :

Commentaires sur une seule ligne : Pour ajouter un commentaire sur une seule ligne, vous pouvez utiliser les deux barres obliques "//" ou le dièse "#" avant le texte du commentaire. Le serveur Web ignorera tout le texte après les barres obliques ou le dièse jusqu'à la fin de la ligne. Voici un exemple de commentaires sur une seule ligne : -->


<?php
// Ceci est un commentaire sur une seule ligne
echo "Bonjour, monde!"; // Ceci est un autre commentaire sur une seule ligne
?>


<!-- Commentaires sur plusieurs lignes : Si vous voulez ajouter un commentaire qui s'étend sur plusieurs lignes, vous pouvez utiliser des barres obliques suivies d'un astérisque "/" pour commencer le commentaire, et un astérisque suivi de des barres obliques "/" pour le terminer. Voici un exemple de commentaires sur plusieurs lignes : -->


<?php
/*
Ceci est un commentaire
sur plusieurs lignes
*/
echo "Bonjour, monde!";
?>


<!-- Il est important de noter que les commentaires ne doivent pas contenir de code actif ou de variables qui peuvent être utilisées pour des attaques de script. Les commentaires sont destinés à être utilisés pour ajouter des notes et des explications dans le code. -->

    
</body>
</html>