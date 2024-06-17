<?php
class Forme {
  public function calculerAire() {
      // À implémenter dans les sous-classes
  }

  public function calculerPerimetre() {
      // À implémenter dans les sous-classes
  }
}

class Rectangle extends Forme {
  private $longueur;
  private $largeur;

  public function __construct($longueur, $largeur) {
      $this->longueur = $longueur;
      $this->largeur = $largeur;
  }

  public function calculerAire() {
      return $this->longueur * $this->largeur;
  }

  public function calculerPerimetre() {
      return 2 * ($this->longueur + $this->largeur);
  }
}

class Cercle extends Forme {
  private $rayon;

  public function __construct($rayon) {
      $this->rayon = $rayon;
  }

  public function calculerAire() {
      return pi() * pow($this->rayon, 2);
  }

  public function calculerPerimetre() {
      return 2 * pi() * $this->rayon;
  }
}

$rectangle = new Rectangle(5, 10);
$cercle = new Cercle(3);

echo "Rectangle :\n";
echo "Aire : " . $rectangle->calculerAire() . "\n";
echo "Périmètre : " . $rectangle->calculerPerimetre() . "\n\n";

echo "Cercle :\n";
echo "Aire : " . $cercle->calculerAire() . "\n";
echo "Périmètre : " . $cercle->calculerPerimetre() . "\n";


?>
<!-- Dans cette solution, nous avons créé une classe Forme qui représente une forme géométrique quelconque. Cette classe contient les méthodes calculerAire() et calculerPerimetre() qui doivent être implémentées dans les sous-classes.

Nous avons ensuite créé deux sous-classes de Forme : Rectangle et Cercle. La classe Rectangle contient les propriétés longueur et largeur, et les méthodes calculerAire() et calculerPerimetre() qui calculent respectivement l'aire et le périmètre d'un rectangle. La classe Cercle contient la propriété rayon et les méthodes calculerAire() et calculerPerimetre() qui calculent respectivement l'aire et le périmètre  -->