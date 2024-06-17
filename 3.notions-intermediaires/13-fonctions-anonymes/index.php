<?php
// Déclaration d'une fonction anonyme
$saluer = function($nom) {
    echo "Bonjour " . $nom;
};

// Appel de la fonction anonyme
$saluer("Alice");
?>


<!-- Dans cet exemple, nous avons déclaré une fonction anonyme en utilisant la syntaxe $nom_de_la_fonction = function() { }. Dans notre cas, nous avons nommé notre fonction $saluer.

Ensuite, nous avons appelé notre fonction en utilisant son nom suivi de ses paramètres entre parenthèses, tout comme nous le ferions pour une fonction déclarée de manière classique.

L'utilisation de fonctions anonymes est utile dans certains contextes, par exemple pour les passer en paramètre à d'autres fonctions ou pour les stocker dans des tableaux. Cependant, il est important de noter que les fonctions anonymes ne peuvent pas être appelées de manière récursive, contrairement aux fonctions déclarées de manière classique.:  -->
