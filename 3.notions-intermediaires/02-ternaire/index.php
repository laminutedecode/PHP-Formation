<!-- 
En PHP, l'opérateur ternaire est une alternative concise à la structure if/else. Cet opérateur permet de définir une expression conditionnelle en une seule ligne.

La syntaxe de l'opérateur ternaire est la suivante : -->

<!--
(condition) ? resultat_si_vrai : resultat_si_faux;


-->

<!-- Si la condition est vraie, l'expression renvoie resultat_si_vrai, sinon elle renvoie resultat_si_faux. -->

<?php
$age = 18;
$resultat = ($age >= 18) ? "majeur" : "mineur";
echo "Vous êtes ".$resultat.".";

?>

<!-- Dans cet exemple, la condition est $age >= 18. Si cette condition est vraie, la variable $resultat est définie sur "majeur". Sinon, la variable $resultat est définie sur "mineur". Le message "Vous êtes majeur." est affiché car $age est égal à 18 et est donc supérieur ou égal à 18.

Il est important de noter que l'opérateur ternaire doit être utilisé avec modération et de manière judicieuse, car une expression conditionnelle complexe peut rendre le code difficile à lire et à comprendre.-->
