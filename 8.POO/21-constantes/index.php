<!-- En programmation orientée objet (POO) en PHP, les constantes sont des valeurs qui ne changent pas pendant l'exécution du programme. Les constantes sont souvent utilisées pour stocker des valeurs qui sont nécessaires pour le fonctionnement d'un programme, telles que des noms de fichiers, des adresses IP, des identifiants de connexion, etc.

Les classes en PHP peuvent également avoir des constantes. Une constante de classe est une constante qui est définie à l'intérieur d'une classe et qui est disponible pour toutes les instances de cette classe. Les constantes de classe sont définies en utilisant le mot-clé "const" suivi du nom de la constante et de sa valeur. Voici un exemple de définition de constantes de classe en PHP : -->
<?php

class MaClasse {
  const CONSTANTE_1 = "Valeur 1";
  const CONSTANTE_2 = "Valeur 2";
}

// <!-- Dans cet exemple, la classe "MaClasse" définit deux constantes de classe : "CONSTANTE_1" et "CONSTANTE_2", qui ont respectivement pour valeurs "Valeur 1" et "Valeur 2". Pour accéder à une constante de classe, on utilise le nom de la classe suivi de l'opérateur de résolution de portée (::) et du nom de la constante, comme ceci : -->

echo MaClasse::CONSTANTE_1;

// Cela affichera la valeur de la constante "CONSTANTE_1" de la classe "MaClasse", soit "Valeur 1".
;?>

