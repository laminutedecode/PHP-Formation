<!-- En PHP, une chaîne de caractères (ou string en anglais) est une séquence de caractères encadrée par des guillemets simples ou doubles. Par exemple : -->
    <?php
$string1 = 'Bonjour, monde!';
$string2 = "Je m'appelle Alice.";

echo $string2
    ?>


<!-- Dans les chaînes de caractères définies avec des guillemets doubles, il est possible d'inclure des variables PHP en utilisant la syntaxe suivante : -->


 
    <?php
$name = "Alice";
$string3 = "Bonjour, je m'appelle $name.";


echo $string3;
    ?>

<!-- Les variables sont évaluées et leur valeur est incluse dans la chaîne de caractères. -->

<!-- Il est également possible d'utiliser des caractères d'échappement pour inclure des caractères spéciaux dans une chaîne de caractères. Par exemple : -->
    <?php
$string4 = "C'est une chaîne de caractères avec une apostrophe.";
$string5 = 'Il y a\nune nouvelle ligne dans cette chaîne de caractères.';



echo $string4;
echo $string5;
    ?>
<!-- 
Dans le deuxième exemple, le caractère "\n" est utilisé pour insérer une nouvelle ligne dans la chaîne de caractères.

Les chaînes de caractères peuvent être concaténées en utilisant l'opérateur ".". Par exemple : -->
    <?php
$string6 = "Bonjour" . " " . "monde!";
echo $string6
    ?>
