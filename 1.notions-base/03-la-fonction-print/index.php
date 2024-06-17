<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- La fonction "print" en PHP est très similaire à la fonction "echo", car elle est également utilisée pour afficher du texte ou des données sur la page Web. Elle fonctionne de manière très similaire à echo, mais elle a quelques différences subtiles.

Tout d'abord, la syntaxe de la fonction print est légèrement différente de celle de la fonction echo. Au lieu d'utiliser des parenthèses pour entourer le texte ou les données à afficher, vous pouvez simplement inclure le texte ou les données entre les guillemets : -->

<?php
$nom = "Jean";
print "Bonjour, $nom!";
?>

<!-- Cela affichera "Bonjour, Jean!" sur la page Web lorsqu'elle est chargée.

La principale différence entre la fonction echo et la fonction print est que la fonction print renvoie une valeur, tandis que la fonction echo ne le fait pas. Cela signifie que la fonction print peut être utilisée dans une expression, tandis que la fonction echo ne peut pas. Par exemple : -->

<?php
$nombre = 10;
$resultat = $nombre * print "2";
echo $resultat;
?>

<!-- Cela affichera "2" sur la page Web (car la fonction print renvoie la valeur 1, qui est ensuite multipliée par 10 pour donner 10), suivie de "10" (car la variable $resultat contient maintenant la valeur 10).

En résumé, la fonction print en PHP est très similaire à la fonction echo, car elle est utilisée pour afficher du texte ou des données sur la page Web. Elle a une syntaxe légèrement différente et renvoie une valeur, ce qui permet de l'utiliser dans une expression. -->

    
</body>
</html>