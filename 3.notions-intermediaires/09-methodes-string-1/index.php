<?php
// Déclaration d'une variable contenant une chaîne de caractères
$string = "Hello world!";

// Déclaration de variables supplémentaires pour les méthodes suivantes
$search = "world";
$replace = "everyone";
$start = 6;
$length = 5;
$delimiter = " ";
$array = array("Hello", "world!");

// strlen()
// La fonction strlen() renvoie la longueur de la chaîne de caractères $string.
$length = strlen($string);
echo "Length of string: $length\n";

// substr()
// La fonction substr() renvoie une sous-chaîne de la chaîne de caractères $string, en commençant à l'index $start et avec une longueur optionnelle $length.
$substring = substr($string, $start, $length);
echo "Substring: $substring\n";

// strpos()
// La fonction strpos() renvoie l'index de la première occurrence de la sous-chaîne $search dans la chaîne de caractères $string. Si la sous-chaîne n'est pas trouvée, la fonction renvoie false.
$position = strpos($string, $search);
if ($position !== false) {
  echo "Found '$search' at position $position\n";
} else {
  echo "Did not find '$search'\n";
}

// str_replace()
// La fonction str_replace() remplace toutes les occurrences de la sous-chaîne $search par la chaîne de caractères $replace dans la chaîne de caractères $string.
$newString = str_replace($search, $replace, $string);
echo "New string: $newString\n";

// strtolower()
// La fonction strtolower() renvoie une version en minuscules de la chaîne de caractères $string.
$lowercase = strtolower($string);
echo "Lowercase string: $lowercase\n";

// strtoupper()
// La fonction strtoupper() renvoie une version en majuscules de la chaîne de caractères $string.
$uppercase = strtoupper($string);
echo "Uppercase string: $uppercase\n";

// trim() (ltrim pour la fin, rtrim pour debut)
// La fonction trim() renvoie une version de la chaîne de caractères $string sans les espaces au début et à la fin.
$trimmed = trim($string);
echo "Trimmed string: $trimmed\n";

// str_split()
// La fonction str_split() divise la chaîne de caractères $string en un tableau de sous-chaînes de longueur $length.
$split = str_split($string, 1);
print_r($split);

// explode()
// La fonction explode() divise la chaîne de caractères $string en un tableau en utilisant le délimiteur $delimiter.
$words = explode($delimiter, $string);
print_r($words);

// implode()
// La fonction implode() concatène tous les éléments d'un tableau $array en une seule chaîne de caractères, en utilisant la chaîne $glue pour les séparer.
$concatenated = implode("-", $array);
echo "Concatenated string: $concatenated\n";

?>
