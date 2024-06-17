<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


<!-- En PHP, il est souvent nécessaire de convertir des valeurs d'un type à un autre. Les conversions de types permettent de s'assurer que les données sont utilisées dans le format approprié pour une opération donnée. Voici quelques exemples de conversion de types courantes en PHP : -->

<?php
$a = 3.14;

$b = floor($a); // arrondi à l'entier inférieur (3)
$c = ceil($a); // arrondi à l'entier supérieur (4)

// Fonction racine carrée : la fonction sqrt() permet de calculer la racine carrée d'un nombre :
$d = sqrt($a); // racine carrée (1.772...)


// Puissance
$e = pow($a, 2); // élévation à la puissance (9.8596...)

// Fonction exponentielle : la fonction exp() permet de calculer la valeur de l'exponentielle d'un nombre :
$f = exp($a); // $f contient la valeur approximative (23.1038...)


// Fonction logarithme : les fonctions log() et log10() permettent de calculer le logarithme naturel et le logarithme décimal d'un nombre respectivement :
$g = log($a); // $g contient la valeur approximative 1.1442227999202
$h = log10($a); // $h contient la valeur 20.49692964807321


// Fonction trigonométrique : les fonctions trigonométriques telles que sin(), cos(), tan(), asin(), acos(), et atan() permettent de calculer les valeurs des fonctions trigonométriques d'un angle en radians :


$i = pi() / 4; // angle de 45 degrés en radians
$j = sin($i); // $b contient la valeur approximative 0.707
$k = cos($i); // $c contient la valeur approximative 0.707
$l = tan($i); // $d contient la valeur approximative 1



?>

<?= "<p>$a</p>" ?>
<?= "<p>$b</p>" ?>
<?= "<p>$c</p>" ?>
<?= "<p>$d</p>" ?>
<?= "<p>$e</p>" ?>
<?= "<p>$f</p>" ?>
<?= "<p>$g</p>" ?>
<?= "<p>$h</p>" ?>
<?= "<p>$i</p>" ?>
<?= "<p>$j</p>" ?>
<?= "<p>$k</p>" ?>
<?= "<p>$l</p>" ?>


<!-- Il est important de noter que certaines conversions de types peuvent entraîner des pertes de précision ou des erreurs. Par exemple, la conversion d'un nombre décimal en entier peut entraîner une perte de précision, tandis que la conversion d'une chaîne de caractères en entier peut entraîner une erreur si la chaîne ne représente pas un nombre valide. Il est donc important de vérifier que les données sont dans le format approprié avant de les convertir en PHP. -->


</body>
</html>