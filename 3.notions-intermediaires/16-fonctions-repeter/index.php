<!-- Pour répéter l'exécution d'une fonction dans PHP, il existe plusieurs méthodes. Voici quelques exemples : 
boucle for
-->


<?php
function maFonction(){
    echo 'hello';
}
for ($i = 0; $i < 10; $i++) {
    maFonction();
}
// Cette boucle exécute la fonction maFonction() 10 fois. La variable $i est utilisée pour compter le nombre de fois que la fonction a été appelée.

// Fonction récursive

function maFonctionRecursive($n) {
    if ($n <= 0) {
        return;
    }
    echo "Appel de maFonctionRecursive avec n = $n<br>";
    maFonctionRecursive($n - 1);
}

maFonctionRecursive(5);

// Cette fonction récursive appelle elle-même avec un argument différent à chaque appel. Dans cet exemple, elle est appelée avec l'argument 5, ce qui signifie qu'elle s'appellera elle-même 5 fois, en affichant un message à chaque appel.

// Fonction anonyme avec la fonction array_walk

function maFonction2($element) {
    echo $element . "<br>";
}

$array = array("un", "deux", "trois");
array_walk($array, function($item) {
    maFonction2($item);
});


// Cette méthode utilise la fonction array_walk pour appliquer une fonction donnée à chaque élément d'un tableau. Dans cet exemple, nous avons une fonction nommée maFonction qui affiche chaque élément d'un tableau sur une ligne séparée. La fonction anonyme passée à array_walk appelle maFonction pour chaque élément du tableau.

// Ces exemples illustrent différentes façons de répéter l'exécution d'une fonction en PHP. En fonction de votre cas d'utilisation, l'une ou l'autre méthode peut être plus appropriée.
?>
