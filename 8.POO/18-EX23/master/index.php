<?php
class Statistiques {
  private $nombres;

  public function __construct($nombres) {
      $this->nombres = $nombres;
  }

  public function calculerMoyenne() {
      $somme = array_sum($this->nombres);
      $nombreElements = count($this->nombres);
      return $somme / $nombreElements;
  }

  public function calculerVariance() {
      $moyenne = $this->calculerMoyenne();
      $variance = 0;
      foreach ($this->nombres as $nombre) {
          $ecart = $nombre - $moyenne;
          $variance += pow($ecart, 2);
      }
      $nombreElements = count($this->nombres);
      return $variance / $nombreElements;
  }

  public function calculerEcartType() {
      $variance = $this->calculerVariance();
      return sqrt($variance);
  }

  public function calculerMediane() {
      sort($this->nombres);
      $nombreElements = count($this->nombres);
      $indiceMilieu = floor(($nombreElements - 1) / 2);
      if ($nombreElements % 2 == 0) {
          return ($this->nombres[$indiceMilieu] + $this->nombres[$indiceMilieu + 1]) / 2;
      } else {
          return $this->nombres[$indiceMilieu];
      }
  }
}

$nombres = [5, 10, 15, 20, 25];
$statistiques = new Statistiques($nombres);

echo "Moyenne : " . $statistiques->calculerMoyenne() . "\n";
echo "Variance : " . $statistiques->calculerVariance() . "\n";
echo "Ecart-type : " . $statistiques->calculerEcartType() . "\n";
echo "Mediane : " . $statistiques->calculerMediane() . "\n";

?>
<!-- Dans cette solution, nous avons créé une classe Statistiques qui prend un tableau de nombres dans son constructeur. Nous avons ensuite ajouté les méthodes calculerMoyenne(), calculerVariance(), calculerEcartType() et calculerMediane() qui calculent respectivement la moyenne, la variance, l'écart-type et la médiane des nombres dans le tableau.

Nous avons utilisé des fonctions PHP telles que array_sum(), count(), pow() et sqrt() pour effectuer les calculs nécessaires.

Enfin, nous avons créé une instance de la classe Statistiques avec un tableau de nombres donné, puis nous avons appelé chaque méthode -->