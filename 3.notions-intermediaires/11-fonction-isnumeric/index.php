<!-- La fonction is_numeric() en PHP est une fonction prédéfinie qui permet de vérifier si une variable est numérique ou non. Elle retourne true si la variable passée en paramètre est une valeur numérique (entier, décimal, notation scientifique) ou une chaîne de caractères numérique, et false dans les autres cas.

Voici un exemple simple d'utilisation de la fonction is_numeric() :La fonction is_numeric() en PHP est une fonction prédéfinie qui permet de vérifier si une variable est numérique ou non. Elle retourne true si la variable passée en paramètre est une valeur numérique (entier, décimal, notation scientifique) ou une chaîne de caractères numérique, et false dans les autres cas.

Voici un exemple simple d'utilisation de la fonction is_numeric() : -->
  <?php
$nombre1 = 10;
$nombre2 = '10';
$chaine = "dix";

if (is_numeric($nombre1)) {
  echo "\$nombre1 est numérique.";
} else {
  echo "\$nombre1 n'est pas numérique.";
}
// affiche : $nombre1 est numérique.

if (is_numeric($nombre2)) {
  echo "\$nombre2 est numérique.";
} else {
  echo "\$nombre2 n'est pas numérique.";
}
// affiche : $nombre2 est numérique.

if (is_numeric($chaine)) {
  echo "\$chaine est numérique.";
} else {
  echo "\$chaine n'est pas numérique.";
}
// affiche : $chaine n'est pas numérique.
// Dans cet exemple, la fonction is_numeric() permet de vérifier si les variables $nombre1, $nombre2 et $chaine sont numériques. La première variable $nombre1 est un entier, donc la fonction retourne true. La deuxième variable $nombre2 est une chaîne de caractères numérique, donc la fonction retourne également true. En revanche, la troisième variable $chaine n'est pas numérique, donc la fonction retourne false.

  ?>
