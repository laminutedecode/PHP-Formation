La méthode print_r() en PHP est une fonction qui permet d'afficher les informations sur la structure d'un tableau de manière lisible pour l'homme. Cette méthode est particulièrement utile pour déboguer des tableaux ou des objets, car elle affiche chaque élément du tableau ou chaque attribut de l'objet, ainsi que leur valeur.

Voici un exemple d'utilisation de la méthode print_r() en PHP :

<?php
$array = array(
    "nom" => "John",
    "age" => 30,
    "ville" => "Paris"
);

print_r($array);
?>


<!-- Dans cet exemple, nous avons un tableau associatif avec trois clés : "nom", "age" et "ville". La méthode print_r() est utilisée pour afficher les informations sur la structure et les valeurs du tableau. 

Comme vous pouvez le voir, la méthode print_r() affiche chaque clé du tableau et sa valeur associée de manière lisible pour l'homme. Cela peut être très utile pour déboguer votre code et comprendre les erreurs qui se produisent.

Il convient de noter que la méthode print_r() ne produit pas une sortie aussi détaillée que la méthode var_dump(). Elle ne fournit pas d'informations sur le type de variable, par exemple. Toutefois, elle est plus facile à lire pour les tableaux complexes, car elle affiche chaque élément sur une ligne séparée et utilise une indentation pour montrer la structure du tableau. -->
