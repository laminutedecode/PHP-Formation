<?php
// La méthode magique __isset() : Cette méthode est appelée lorsque l'on tente de vérifier si une propriété d'un objet existe ou non. Elle prend en paramètre le nom de la propriété que l'on souhaite vérifier et doit retourner un booléen indiquant si la propriété existe ou non.
// Exemple d'utilisation de __isset() :

class Voiture {
  private $marque;
  private $modele;

  public function __construct($marque, $modele) {
      $this->marque = $marque;
      $this->modele = $modele;
  }

  public function __isset($propriete) {
      return isset($this->$propriete);
  }
}

$voiture = new Voiture("Renault", "Clio");
echo isset($voiture->marque); // retourne true
echo isset($voiture->couleur); // retourne false



// La méthode magique __sleep() : Cette méthode est appelée lorsque l'on souhaite sérialiser un objet (c'est-à-dire le transformer en une chaîne de caractères qui peut être stockée ou transmise). Elle doit retourner un tableau contenant les noms des propriétés de l'objet qui doivent être sérialisées.
// Exemple d'utilisation de __sleep() :

class Voiture2 {
  private $marque;
  private $modele;
  private $annee;

  public function __construct($marque, $modele, $annee) {
      $this->marque = $marque;
      $this->modele = $modele;
      $this->annee = $annee;
  }

  public function __sleep() {
      return array('marque', 'modele');
  }
}

$voiture2 = new Voiture("Renault", "Clio", 2010);
$serialized = serialize($voiture2);
echo $serialized; // affiche 'O:7:"Voiture":2:{s:6:"marque";s:7:"Renault";s:6:"modele";s:4:"Clio";}'


// La méthode magique __invoke() : Cette méthode permet de rendre un objet callable, c'est-à-dire que l'on peut l'appeler comme une fonction en utilisant la syntaxe $objet(). Elle peut prendre des paramètres et doit retourner une valeur.
// Exemple d'utilisation de __invoke() :

class Calculatrice {
  public function __invoke($a, $b) {
      return $a + $b;
  }
}

$calculatrice = new Calculatrice();
$resultat = $calculatrice(5, 7); // équivalent à $resultat = $calculatrice->__invoke(5, 7);
echo $resultat; // affiche 12

?>
