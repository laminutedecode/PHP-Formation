<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, les variables sont utilisées pour stocker des valeurs qui peuvent être utilisées dans le code pour différentes opérations. Les variables sont identifiées par un nom précédé d'un symbole dollar ($).

Voici un exemple de déclaration et d'utilisation de variables en PHP : -->


<?php
$age = 25; // déclaration d'une variable "age" avec la valeur "25"
$prenom = "Jean"; // déclaration d'une variable "prenom" avec la valeur "Jean"
$solde = 120.50; // déclaration d'une variable "solde" avec la valeur "120.50"
$message = "Bonjour, ".$prenom."!"; // création d'une chaîne avec la concaténation de variables
echo $message; // affichage de la chaîne
?>


<!-- Dans cet exemple, trois variables sont déclarées : $age, $prenom et $solde. La première variable est déclarée avec une valeur numérique, la deuxième variable est déclarée avec une valeur de chaîne de caractères, et la troisième variable est déclarée avec une valeur décimale.

La quatrième ligne utilise la concaténation de chaînes de caractères pour créer un message personnalisé en utilisant la variable $prenom.

Enfin, la cinquième ligne affiche le contenu de la variable $message à l'aide de la fonction echo.

Il est important de noter que les variables en PHP sont sensibles à la casse, c'est-à-dire que $prenom et $Prenom sont considérées comme deux variables distinctes. De plus, les variables doivent commencer par une lettre ou un underscore, et ne doivent pas contenir d'espaces.

En conclusion, les variables en PHP permettent de stocker des valeurs qui peuvent être utilisées dans le code pour différentes opérations. Elles sont identifiées par un nom précédé d'un symbole dollar ($). Les variables en PHP sont sensibles à la casse, doivent commencer par une lettre ou un underscore, et ne doivent pas contenir d'espaces. -->

</body>
</html>