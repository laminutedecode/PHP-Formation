<!-- 
En PHP, switch est une structure de contrôle qui permet de simplifier l'écriture de plusieurs instructions if/else if qui testent la même variable. Elle est souvent utilisée pour les situations où plusieurs valeurs possibles sont attendues pour une même variable, et où une action différente doit être exécutée pour chaque valeur.

La syntaxe de switch est la suivante : -->

<!--
switch ($variable) {
    case valeur1:
      // instructions à exécuter si $variable est égal à valeur1
      break;
    case valeur2:
      // instructions à exécuter si $variable est égal à valeur2
      break;
    // etc.
    default:
      // instructions à exécuter si aucune condition n'est remplie
      break;
  }

-->

<!-- La variable $variable est testée pour chaque valeur dans la liste des cas (cases) spécifiée dans la structure switch. Lorsqu'une valeur correspond à la valeur de $variable, les instructions associées à ce cas sont exécutées. Si aucune valeur ne correspond à la valeur de $variable, les instructions dans le cas default sont exécutées.

Voici un exemple d'utilisation de switch en PHP : -->

<?php
$couleur = "bleu";

switch ($couleur) {
  case "rouge":
    echo "La couleur est rouge.";
    break;
  case "bleu":
    echo "La couleur est bleu.";
    break;
  case "vert":
    echo "La couleur est vert.";
    break;
  default:
    echo "La couleur n'est pas reconnue.";
    break;
}


?>

<!-- Dans cet exemple, la variable $couleur est testée pour chaque cas dans la structure switch. Étant donné que $couleur est égal à "bleu", les instructions dans le deuxième cas sont exécutées et le message "La couleur est bleu." est affiché. -->
