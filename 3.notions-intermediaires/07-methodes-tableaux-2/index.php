<?php


// Déclaration d'un tableau
$numbers = array(1, 2, 3, 4, 5, 5, 6, 7, 8, 9, 10);

// Utilisation de array_key_exists()
// array_key_exists() : permet de vérifier si une clé existe dans un tableau.
if (array_key_exists(4, $numbers)) {
    echo "La clé 4 existe dans le tableau";
} else {
    echo "La clé 4 n'existe pas dans le tableau";
}

// Utilisation de array_reverse()
// array_reverse() : permet de renverser l'ordre des éléments d'un tableau.
$reversedNumbers = array_reverse($numbers);
print_r($reversedNumbers);

// Utilisation de array_sum()
// array_sum() : permet de retourner la somme des éléments d'un tableau.
$sum = array_sum($numbers);
echo "La somme des nombres est : " . $sum;

// Utilisation de in_array()
// in_array() : permet de vérifier si une valeur existe dans un tableau.
if (in_array(5, $numbers)) {
    echo "La valeur 5 existe dans le tableau";
} else {
    echo "La valeur 5 n'existe pas dans le tableau";
}

// Utilisation de array_diff()
// array_diff() : permet de comparer deux tableaux et de renvoyer les valeurs qui sont présentes dans le premier tableau mais pas dans le second.
$first = array(1, 2, 3, 4, 5);
$second = array(3, 4, 5, 6, 7);
$difference = array_diff($first, $second);
print_r($difference);

// Utilisation de array_intersect()
// array_intersect() : permet de comparer deux tableaux et de renvoyer les valeurs qui sont présentes dans les deux tableaux.
$commonValues = array_intersect($first, $second);
print_r($commonValues);

// Utilisation de array_chunk()
// array_chunk() : permet de diviser un tableau en plusieurs tableaux plus petits de taille égale ou presque égale.
$chunks = array_chunk($numbers, 3);
print_r($chunks);


?>