<?php
// La méthode d'instance equals() permet de comparer deux objets et de déterminer s'ils sont égaux ou non. Elle retourne true si les deux objets sont identiques et false sinon. Cette méthode est souvent utilisée pour comparer des objets de même type qui ont des attributs différents.

class Rectangle {
    private $length;
    private $width;
    
    public function __construct($length, $width) {
      $this->length = $length;
      $this->width = $width;
    }
    
    public function equals($rectangle) {
      return $this->length == $rectangle->length && $this->width == $rectangle->width;
    }
  }
  
  $rectangle1 = new Rectangle(10, 5);
  $rectangle2 = new Rectangle(10, 5);
  
  if($rectangle1->equals($rectangle2)) {
    echo "Il sont identique";
  } else {
    echo "il ne sont pas identique";
  }
  

// La méthode statique newInstance() permet de créer une nouvelle instance d'une classe sans avoir besoin de spécifier le nom de la classe. Elle prend en argument le nom de la classe et des paramètres optionnels pour le constructeur de cette classe. Cette méthode est utile pour instancier dynamiquement des objets en fonction de leur nom.

class Car {
    public $color;
    
    public static function newInstance($color) {
      $car = new Car();
      $car->color = $color;
      return $car;
    }
  }
  
  $redCar = Car::newInstance("red");
  echo $redCar->color; // affiche "red"
  

// La méthode magique __toString() est appelée lorsque l'on tente de convertir un objet en chaîne de caractères. Elle permet de définir la représentation de l'objet sous forme de chaîne de caractères. Cette méthode est souvent utilisée pour afficher des informations sur l'objet à l'utilisateur.

class Person {
    private $name;
    
    public function __construct($name) {
      $this->name = $name;
    }
    
    public function __toString() {
      return "Je m'appel " . $this->name;
    }
  }
  
  $person = new Person("John Doe");
  echo $person; // affiche "My name is John Doe"

  // __callStatic() : cette méthode est appelée lorsqu'une méthode statique est appelée sur une classe qui n'existe pas ou qui n'est pas accessible. Elle permet de gérer ces erreurs et d'effectuer des actions personnalisées. Voici un exemple :

  class MaClasse {
    public static function __callStatic($nom, $arguments) {
        echo "La méthode statique $nom n'existe pas ou n'est pas accessible.";
    }
}

MaClasse::methodeInexistante(); // affiche "La méthode statique methodeInexistante n'existe pas ou n'est pas accessible."

  

?>
