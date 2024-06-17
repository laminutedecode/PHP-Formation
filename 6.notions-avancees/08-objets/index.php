<?php


// En PHP, les objets sont des instances de classes, qui sont des modèles de données et de comportements. Les classes permettent de définir un ensemble de propriétés (variables) et de méthodes (fonctions) qui peuvent être utilisées pour créer des objets.

// Pour créer une instance d'une classe, on utilise le mot-clé new suivi du nom de la classe et éventuellement des arguments pour le constructeur de la classe. Par exemple :

class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function greet() {
    echo "Hello je suis " . $this->name . " et j'ai " . $this->age . " ans";
  }
}

$person = new Person("John", 30);
$person->greet(); // affiche la chaine

// Dans cet exemple, nous avons créé une classe Person avec deux propriétés publiques $name et $age, ainsi qu'une méthode greet() qui affiche une salutation personnalisée en utilisant les propriétés de l'objet. Nous avons ensuite créé une instance de la classe Person en utilisant le constructeur de la classe et en passant les arguments "John" et 30, puis nous avons appelé la méthode greet() sur cette instance.

// Les objets en PHP sont souvent utilisés pour encapsuler des données et des comportements liés dans un seul objet, ce qui permet de mieux organiser et structurer le code. Les objets peuvent également être utilisés pour implémenter des concepts de programmation orientée objet tels que l'héritage, le polymorphisme et l'encapsulation.

?>
