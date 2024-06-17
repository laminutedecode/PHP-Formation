
<?php


// En programmation orientée objet, un constructeur est une méthode spéciale qui est appelée automatiquement lorsqu'un objet est créé à partir d'une classe. En PHP, les constructeurs sont définis à l'aide de la méthode __construct().

class MaClasse {
  private $monAttribut;

  public function __construct($valeur) {
      $this->monAttribut = $valeur;
  }

  public function afficherAttribut() {
      echo $this->monAttribut;
  }
}

// Dans cet exemple, le constructeur de la classe MaClasse prend un paramètre $valeur et l'assigne à l'attribut monAttribut de l'objet créé.

// Pour créer un objet de cette classe, vous pouvez simplement appeler le constructeur en utilisant le mot-clé new :

$monObjet = new MaClasse("valeur de mon attribut");


// Ici, nous avons créé un nouvel objet de la classe MaClasse et passé la valeur "valeur de mon attribut" comme argument au constructeur. Cette valeur a été assignée à l'attribut monAttribut de l'objet.

// Maintenant, nous pouvons appeler la méthode afficherAttribut() pour afficher la valeur de l'attribut monAttribut 

$monObjet->afficherAttribut(); // Affiche "valeur de mon attribut"


// Le constructeur est une méthode très utile pour initialiser les attributs d'un objet lors de sa création. Il est souvent utilisé pour vérifier les paramètres passés au constructeur et pour initialiser les attributs de la classe à des valeurs par défaut si aucun paramètre n'est fourni.
?>


