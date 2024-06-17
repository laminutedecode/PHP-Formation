<?php
// En PHP, les variables de classe sont des variables qui sont déclarées au niveau de la classe plutôt qu'au niveau de l'instance de la classe. Cela signifie que la variable de classe est partagée entre toutes les instances de la classe et peut être utilisée pour stocker des valeurs qui doivent être partagées par toutes les instances de la classe.

// Pour déclarer une variable de classe en PHP, il suffit de la définir avec le mot-clé "static" devant son nom dans la définition de la classe, comme ceci :

// class MyClass {
//   public static $myVariable = "valeur";
// }

// Dans cet exemple, $myVariable est une variable de classe déclarée dans la classe MyClass. Elle peut être utilisée en accédant directement à la classe, comme ceci :


// echo MyClass::$myVariable; // affiche "valeur"

// Il est également possible de modifier la valeur de la variable de classe en utilisant le même accès à la classe :

// MyClass::$myVariable = "nouvelle valeur";
// echo MyClass::$myVariable; // affiche "nouvelle valeur"

// Les variables de classe peuvent être très utiles pour stocker des données qui doivent être partagées par toutes les instances de la classe, comme des constantes ou des compteurs. Il est important de se rappeler que les variables de classe sont partagées entre toutes les instances de la classe, ce qui signifie que si vous modifiez la valeur de la variable dans une instance, la nouvelle valeur sera reflétée dans toutes les autres instances.

class MyClass {
  public static $myVariable = "valeur"; // déclaration d'une variable de classe
  
  public function __construct() {
      // Constructeur de la classe
  }
  
  public function printMyVariable() {
      // Affichage de la variable de classe
      echo self::$myVariable;
  }
  
  public static function changeMyVariable($newVal) {
      // Modification de la variable de classe
      self::$myVariable = $newVal;
  }
}

// Dans cet exemple, nous avons une classe MyClass avec une variable de classe $myVariable déclarée comme public static. Nous avons également deux méthodes, printMyVariable() pour afficher la valeur de la variable de classe et changeMyVariable($newVal) pour modifier la valeur de la variable de classe.

// Nous pouvons accéder à la variable de classe et aux méthodes de la classe en utilisant le nom de la classe :

echo MyClass::$myVariable; // affiche "valeur"

$obj = new MyClass();
$obj->printMyVariable(); // affiche "valeur"

MyClass::changeMyVariable("nouvelle valeur");

echo MyClass::$myVariable; // affiche "nouvelle valeur"

$obj2 = new MyClass();
$obj2->printMyVariable(); // affiche "nouvelle valeur"


?>
