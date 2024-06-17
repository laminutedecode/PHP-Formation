<!-- En PHP, un tableau est une structure de données qui permet de stocker plusieurs valeurs sous un même nom. Il existe deux types de tableaux en PHP : les tableaux indexés et les tableaux associatifs.

Un tableau indexé est un tableau dont chaque élément est associé à un index numérique. Les index commencent à zéro pour le premier élément du tableau et augmentent de un pour chaque élément suivant. Voici un exemple de tableau indexé : -->

<?php
$fruits = array("pomme", "banane", "orange", "kiwi");

?>

<!-- Pour accéder à un élément spécifique d'un tableau, on utilise l'index ou la clé correspondante. Par exemple, pour accéder à la deuxième valeur du tableau $fruits, on utilise l'index 1 : -->

<?php
echo $fruits[1]; // affiche "banane"

?>



<!-- Un tableau associatif, quant à lui, est un tableau dont chaque élément est associé à une clé ou un nom plutôt qu'à un index numérique. Les clés peuvent être des chaînes de caractères ou des nombres. Voici un exemple de tableau associatif : -->
<?php
$personne = array("nom" => "Dupont", "prenom" => "Jean", "age" => 30);

?>

<!-- Pour accéder à la valeur associée à la clé "prenom" dans le tableau $personne, on utilise la notation $tableau["clé"] : -->

<?php
echo $personne["prenom"]; // affiche "Jean"

?>


<!-- On peut également parcourir un tableau à l'aide d'une boucle for ou foreach. Par exemple, pour parcourir le tableau $fruits : -->
<?php
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}


?>