
<?php

// En PHP, l'héritage est une fonctionnalité qui permet à une classe d'hériter des propriétés et des méthodes d'une autre classe, appelée la classe parente. La classe qui hérite est appelée la classe enfant.

// Pour définir une classe enfant, on utilise le mot-clé class, suivi du nom de la classe enfant, et du mot-clé extends, suivi du nom de la classe parente :


class ClasseParente {
  // Propriétés et méthodes de la classe parente
}

class ClasseEnfant extends ClasseParente {
  // Propriétés et méthodes de la classe enfant
}

// Dans cet exemple, la classe ClasseEnfant hérite des propriétés et des méthodes de la classe ClasseParente.

// Les propriétés et les méthodes de la classe parente peuvent être utilisées dans la classe enfant en utilisant le mot-clé parent suivi du nom de la propriété ou de la méthode :

class ClasseParente {
  protected $propriete;

  public function methode() {
      // Code de la méthode
  }
}

class ClasseEnfant extends ClasseParente {
  public function autreMethode() {
      $this->propriete = "valeur"; // Utilisation de la propriété de la classe parente
      parent::methode(); // Appel de la méthode de la classe parente
  }
}

// Dans cet exemple, la classe enfant ClasseEnfant a accès à la propriété $propriete de la classe parente ClasseParente, et peut appeler sa méthode methode() en utilisant parent::methode().

// L'héritage permet donc de créer des classes spécialisées à partir de classes existantes, en réutilisant une partie de leur code et en ajoutant des fonctionnalités supplémentaires. Cependant, il est important de comprendre que l'héritage peut créer des dépendances complexes entre les classes, et que les changements apportés à la classe parente peuvent avoir des effets inattendus sur les classes enfants. Il est donc important de concevoir les hiérarchies de classes avec soin, et d'utiliser d'autres techniques, comme les interfaces et les traits, pour partager du code entre des classes qui n'ont pas de relation d'héritage.

?>


