<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, la concaténation est l'opération qui permet de joindre deux chaînes de caractères en une seule chaîne. Elle est souvent utilisée pour construire des messages dynamiques qui contiennent des variables.

En PHP, l'opérateur de concaténation est le point "." (point). Pour concaténer deux chaînes, il suffit d'utiliser cet opérateur entre les deux chaînes : -->


<?php
$prenom = "Jean";
$nom = "Dupont";
$message = "Bonjour, ".$prenom." ".$nom."!";
echo $message;
?>


<!-- Dans cet exemple, la concaténation est utilisée pour créer le message "Bonjour, Jean Dupont!". La variable $prenom et la variable $nom sont concaténées avec la chaîne de caractères "Bonjour, " et la chaîne de caractères "!". Le résultat est stocké dans la variable $message, qui est ensuite affichée à l'aide de la fonction echo.

Il est également possible de concaténer des chaînes à l'intérieur d'une chaîne littérale en utilisant des accolades {}. Cela permet d'insérer facilement des variables dans une chaîne de caractères : -->

<?php
$prenom = "Benoit";
$nom = "Carle";
$message = "Bonjour, {$prenom} {$nom}!";
echo $message;
?>

<!-- Cela affichera également "Bonjour, Jean Dupont!" sur la page Web. La variable $prenom et la variable $nom sont insérées dans la chaîne littérale en utilisant les accolades {}, qui permettent d'insérer des variables dans une chaîne de caractères.

En résumé, la concaténation en PHP est utilisée pour joindre deux chaînes de caractères en une seule chaîne. Elle est souvent utilisée pour créer des messages dynamiques qui contiennent des variables. L'opérateur de concaténation en PHP est le point "." (point), et il est également possible d'utiliser des accolades {} pour insérer des variables dans une chaîne littérale. -->
</body>
</html>