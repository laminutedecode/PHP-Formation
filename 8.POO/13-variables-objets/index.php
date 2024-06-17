<?php
// Les variables d'objets sont des variables qui sont déclarées à l'intérieur d'une classe et qui sont accessibles à travers les instances de cette classe. Elles sont également appelées propriétés ou attributs de l'objet.

// En PHP, les variables d'objets peuvent être déclarées avec les mots-clés public, protected et private. Les variables publiques sont accessibles de n'importe où, tandis que les variables protégées et privées ne sont accessibles que dans la classe elle-même ou dans les classes qui en héritent.

// Voici un exemple d'utilisation de variables d'objets en PHP :

class Voiture {
  public $marque;
  protected $modele;
  private $annee;
  
  public function __construct($marque, $modele, $annee) {
      $this->marque = $marque;
      $this->modele = $modele;
      $this->annee = $annee;
  }
  
  public function afficherInfos() {
      echo $this->marque . ' ' . $this->modele . ' (' . $this->annee . ')';
  }
}

$maVoiture = new Voiture('Toyota', 'Corolla', 2019);
$maVoiture->afficherInfos(); // Affiche "Toyota Corolla (2019)"
// Dans cet exemple, la classe Voiture a trois variables d'objets : $marque, $modele et $annee. La variable $marque est publique, donc elle est accessible de n'importe où. La variable $modele est protégée, donc elle est accessible uniquement à l'intérieur de la classe Voiture et de ses classes enfants. La variable $annee est privée, donc elle est accessible uniquement à l'intérieur de la classe Voiture.

// Lorsque nous créons une instance de la classe Voiture et appelons la méthode afficherInfos(), nous pouvons voir que la méthode peut accéder à toutes les variables d'objets de la classe, quelle que soit leur visibilité. Cependant, si nous essayons d'accéder directement à la variable $modele ou $annee en dehors de la classe Voiture, nous obtiendrons une erreur car elles ne sont pas accessibles en dehors de la classe.
?>
