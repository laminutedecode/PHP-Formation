<?php
// la méthode magique __destruct() est appelée automatiquement lorsqu'un objet est détruit. Cela peut arriver soit lorsque l'objet est explicitement détruit en appelant la fonction unset(), soit lorsque l'objet est utilisé pour la dernière fois et que sa référence est supprimée.

// Voici un exemple de code pour illustrer la méthode __destruct() :

class MaClasse {
    public function __destruct() {
      echo "L'objet a été détruit";
    }
  }
  
  $objet = new MaClasse();
  unset($objet); // La méthode __destruct() sera appelée automatiquement ici
  
//   La méthode magique __clone() est appelée automatiquement lorsqu'un objet est cloné en utilisant l'opérateur clone. Elle permet de définir le comportement de l'objet cloné par rapport à l'objet d'origine.

//   Voici un exemple de code pour illustrer la méthode __clone() :

  class MaClasse2 {
    public function __clone() {
      echo "L'objet a été cloné";
    }
  }
  
  $objet = new MaClasse2();
  $objet_clone = clone $objet; // La méthode __clone() sera appelée automatiquement ici

//   La méthode magique __unset() est appelée automatiquement lorsqu'une propriété d'un objet est supprimée à l'aide de la fonction unset(). Elle permet de définir le comportement de l'objet lorsqu'une propriété est supprimée.

// Voici un exemple de code pour illustrer la méthode __unset() :
class MaClasse3 {
    private $propriete;
  
    public function __unset($nom) {
      echo "La propriété $nom a été supprimée";
      unset($this->$nom);
    }
  }
  
  $objet = new MaClasse3();
  unset($objet->propriete); // La méthode __unset() sera appelée automatiquement ici


  // __set_state() : cette méthode est appelée lorsqu'on utilise la fonction var_export() sur un objet. Elle permet de personnaliser la représentation sous forme de chaîne de caractères de l'objet. Voici un exemple :
    class MaClasse4 {
      public $propriete;
  
      public static function __set_state($tableau) {
          $objet = new MaClasse4();
          $objet->propriete = $tableau['propriete'];
          return $objet;
      }
  }
  
  $objet = new MaClasse4();
  $objet->propriete = 'valeur de la propriété';
  $export = var_export($objet, true);
  eval('$objetExporte = ' . $export . ';');
  echo $objetExporte->propriete; // affiche "valeur de la propriété"
  
  
?>
