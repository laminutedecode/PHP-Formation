<?php
// La méthode magique __construct(): Cette méthode est appelée automatiquement lorsqu'un objet est créé et initialisée. Elle est utilisée pour initialiser les propriétés de l'objet et peut accepter des paramètres qui sont passés lors de la création de l'objet.

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person("John", 30);

// La méthode magique __get(): Cette méthode est appelée automatiquement lorsqu'on tente d'accéder à une propriété non définie dans un objet. Elle accepte un argument qui correspond au nom de la propriété qui est en train d'être accédée.

class Person2 {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
}

$person2 = new Person("John", 30);
echo $person2->name; // affiche "John"


// La méthode magique __set(): Cette méthode est appelée automatiquement lorsqu'on tente de définir une valeur pour une propriété non définie dans un objet. Elle accepte deux arguments, le nom de la propriété et la valeur à définir pour cette propriété.

class Person3 {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

$person3 = new Person("John", 30);
$person3->name = "Jane";
echo $person3->name; // affiche "Jane"



// __debugInfo() : cette méthode est appelée lorsqu'un objet est affiché avec la fonction var_dump(). Elle permet de personnaliser l'affichage des propriétés de l'objet. Voici un exemple :
class MaClasse {
  private $propriete;

  public function __construct($valeur) {
      $this->propriete = $valeur;
  }

  public function __debugInfo() {
      return [
          'valeur' => '***'
      ];
  }
}

$objet = new MaClasse('valeur de la propriété');
var_dump($objet); // affiche les informations de l'objet en remplaçant la valeur de la propriété par '***'

?>
