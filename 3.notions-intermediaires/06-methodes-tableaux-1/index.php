<?php

// array_push() : permet d'ajouter un ou plusieurs éléments à la fin d'un tableau.
// array_pop() : permet de supprimer le dernier élément d'un tableau.
// array_shift() : permet de supprimer le premier élément d'un tableau.
// array_unshift() : permet d'ajouter un ou plusieurs éléments au début d'un tableau.
// array_slice() : permet de retourner une partie d'un tableau.
// array_merge() : permet de fusionner deux ou plusieurs tableaux en un seul.
// sort() : permet de trier un tableau en ordre croissant.
// rsort() : permet de trier un tableau en ordre décroissant.

// Définition du tableau de noms
$names = ["Alice", "Bob", "Charlie", "Dave"];
// Utilisation de la méthode count()
echo "Le tableau contient " . count($names) . " noms<br>";
// Utilisation de la méthode array_push()
array_push($names, "Eve");
echo "Le tableau après l'ajout d'un élément : " . implode(", ", $names) . "<br>";
// Utilisation de la méthode array_pop()
$last = array_pop($names);
echo "Le tableau après la suppression du dernier élément ($last) : " . implode(", ", $names) . "<br>";
// Utilisation de la méthode array_shift()

$first = array_shift($names);
echo "Le tableau après la suppression du premier élément ($first) : " . implode(", ", $names) . "<br>";
// Utilisation de la méthode array_unshift()

array_unshift($names, "Ann");
echo "Le tableau après l'ajout de deux éléments au début : " . implode(", ", $names) . "<br>";
// Utilisation de la méthode array_slice()

$slice = array_slice($names, 2, 2);
echo "La tranche du tableau [2:4] : " . implode(", ", $slice) . "<br>";
// Définition du deuxième tableau de noms

$moreNames = ["Frank", "Grace"];
// Utilisation de la méthode array_merge()
$merged = array_merge($names, $moreNames);
echo "Les deux tableaux fusionnés : " . implode(", ", $merged) . "<br>";

// Utilisation de la méthode sort()
sort($names);
echo "Le tableau trié par ordre croissant : " . implode(", ", $names) . "<br>";
// Utilisation de la méthode rsort()
rsort($names);
echo "Le tableau trié par ordre décroissant : " . implode(", ", $names) . "<br>";

?>