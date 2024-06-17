<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>



<!-- En PHP, les types numériques sont utilisés pour stocker des valeurs numériques. Il existe plusieurs types numériques en PHP, qui diffèrent en termes de plage de valeurs possibles et de précision.

Les types numériques les plus couramment utilisés en PHP sont :

int : représente un nombre entier signé, qui peut être positif, négatif ou zéro. La plage de valeurs possibles pour un int dépend de la plateforme sur laquelle PHP est exécuté, mais elle est généralement comprise entre -2147483648 et 2147483647.
float ou double : représente un nombre décimal, qui peut être positif, négatif ou zéro. La précision de float est généralement de 7 

chiffres décimaux, tandis que la précision de double est généralement de 14 chiffres décimaux.
number : représente un nombre décimal précis, avec une précision arbitraire. Ce type est disponible depuis PHP 7.0 et il est généralement utilisé pour les calculs financiers ou les calculs nécessitant une précision élevée.

Il est important de noter que PHP est un langage de script typé dynamiquement, ce qui signifie que les types de données sont déterminés au moment de l'exécution plutôt qu'au moment de la compilation. Cela signifie que vous pouvez utiliser les mêmes variables pour stocker différents types de données numériques tout au long de l'exécution du script. Cependant, il est important de comprendre les différences entre les types numériques pour éviter les erreurs de calcul et les problèmes de précision. -->


<?php
$age = 25; // déclaration d'un entier
$temperature = 36.5; // déclaration d'un nombre décimal
$solde = 1500.50; // déclaration d'un nombre décimal


?>

<?= "<p>$age</p>" ?>
<?= "<p>$temperature</p>" ?>
<?= "<p>$solde</p>" ?>

</body>
</html>