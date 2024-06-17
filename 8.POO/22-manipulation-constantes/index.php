
<?php

// En PHP, il est possible de manipuler les constantes avec les classes en utilisant la notation :: pour accéder aux constantes de la classe.

// Pour déclarer une constante dans une classe, vous pouvez utiliser le mot-clé const suivi du nom de la constante et de sa valeur :

class MaClasse {
  const MA_CONSTANTE = "valeur de la constante";
}


// Pour accéder à cette constante depuis l'extérieur de la classe, vous pouvez utiliser la notation NomDeLaClasse::NOM_DE_LA_CONSTANTE :

echo MaClasse::MA_CONSTANTE; // Affiche "valeur de la constante"


// Il est également possible d'accéder à une constante depuis une méthode de la classe en utilisant le mot-clé self :

class MaClasse2 {
  const MA_CONSTANTE = "valeur de la constante";
  
  public function afficherConstante() {
      echo self::MA_CONSTANTE;
  }
}

$monObjet = new MaClasse2();
$monObjet->afficherConstante(); // Affiche "valeur de la constante"
// Notez que les constantes sont toujours publiques et peuvent être accédées depuis n'importe où dans le code. Il est donc important de bien les nommer pour éviter les conflits avec d'autres constantes.
?>


