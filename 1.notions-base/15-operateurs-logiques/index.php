<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, il existe trois opérateurs logiques :

&& (et) : retourne true si toutes les conditions sont vraies.
|| (ou) : retourne true si au moins une des conditions est vraie.
! (non) : retourne true si la condition est fausse.
Ces opérateurs sont couramment utilisés dans les instructions if, while, for, etc. pour évaluer les expressions booléennes (vraies ou fausses).

Par exemple, voici comment vous pouvez utiliser ces opérateurs logiques en PHP : -->

<?php


$age = 16;
$ville = "paris";
$estEudiant = true;

// && (et)
if ($age > 18 && $ville == 'Paris') {
  echo "Vous êtes majeur et vous vivez à Paris.";
}

// || (ou)
if ($age < 18 || $estEtudiant == true) {
  echo "Vous bénéficiez d'une réduction.";
}

// ! (non)
if (!$estEtudiant) {
  echo "Vous ne bénéficiez pas de la réduction étudiante.";
}


?>


<!-- Dans le premier exemple, la condition vérifie si l'âge est supérieur à 18 ET si la ville est Paris. Dans le deuxième exemple, la condition vérifie si l'âge est inférieur à 18 OU si la personne est étudiante. Dans le troisième exemple, la condition vérifie si la personne n'est pas étudiante.

Il est important de noter que les opérateurs logiques && et || utilisent l'évaluation paresseuse (lazy evaluation) pour améliorer les performances. Cela signifie que si la première condition est suffisante pour déterminer le résultat de l'opération logique, la deuxième condition ne sera pas évaluée. -->
</body>
</html>