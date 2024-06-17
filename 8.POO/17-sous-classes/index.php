<?php

// En PHP, on peut créer des sous-classes ou des classes dérivées à partir d'une classe parent. La sous-classe hérite des propriétés et des méthodes de la classe parent et peut ajouter ou modifier des fonctionnalités supplémentaires.



class Animal {
  protected $espece;
  protected $nom;
  
  public function __construct($espece, $nom) {
    $this->espece = $espece;
    $this->nom = $nom;
  }
  
  public function sePresenter() {
    echo "Je suis un ".$this->espece." et je m'appelle ".$this->nom.".";
  }
}
// Pour créer une sous-classe en PHP, on utilise le mot-clé extends suivi du nom de la classe parent. Par exemple :

class Chien extends Animal {
  public function aboyer() {
      echo "Wouf wouf !";
  }
}

$rex = new Chien("chien", "Rex");
$rex->sePresenter(); // affiche "Je suis un chien et je m'appelle Rex."
$rex->aboyer(); // affiche "Wouf wouf !"


// Dans cet exemple, la classe Chien est une sous-classe de la classe Animal. Elle hérite de la propriété $espece et de la méthode sePresenter() de la classe parent. La classe Chien ajoute une nouvelle méthode aboyer() qui affiche "Wouf wouf !".

// On peut instancier un objet de la sous-classe Chien, qui aura accès à toutes les méthodes et propriétés de la classe parent Animal ainsi qu'à la méthode aboyer() de la classe Chien.

// Notez que dans la classe parent, la propriété $espece est déclarée comme protected. Cela signifie que cette propriété est accessible à la fois par la classe parent et par ses sous-classes, mais pas par les autres classes en dehors de la hiérarchie. On peut également utiliser le mot-clé private pour une propriété qui ne sera accessible que par la classe parent, ou le mot-clé public pour une propriété qui sera accessible par toutes les classes.

?>
