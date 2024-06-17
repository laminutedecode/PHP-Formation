<?php


// htmlspecialchars($string) : onvertir les caractères spéciaux en entités HTML, ce qui permet d'éviter les problèmes de sécurité lors de l'affichage de la chaîne $string dans une page web.
$string2 = "<script>alert('hello');</script>";
$encodedString = htmlspecialchars($string2);

echo $encodedString;


// strcasecmp($string1, $string2) : comparer deux chaînes de caractères en ignorant la casse.

$string3 = "Hello";
$string4 = "hello";

if (strcasecmp($string3, $string4) == 0) {
  echo "Strings identique\n";
} else {
  echo "Strings non identique\n";
}



// ucfirst($string) mettre la première lettre d'une chaîne de caractères en majuscule.
$string5 = "hello world";
$firstChar = ucfirst($string5[0]);
$newString = $firstChar . substr($string5, 1);

echo $newString;


// ucwords($string) :mettre la première lettre de chaque mot dans une chaîne de caractères en majuscule.

$string6 = "hello world";
$newString2 = ucwords($string6);

echo $newString2;


// strrev() pour renverser l'ordre des caractères dans une chaîne de caractères.
$string7 = "hello world";
$reversedString = strrev($string7);

echo $reversedString;


// sprintf($format, $arg1, $arg2, ...) : pour formater une chaîne de caractères en remplaçant des spécificateurs de format par des valeurs spécifiées.

$name = "John";
$age = 30;

$message = sprintf("Je suis %s et j'ai %d years old.", $name, $age);

echo $message;


?>
