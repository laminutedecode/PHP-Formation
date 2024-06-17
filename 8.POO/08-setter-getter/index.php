<?php
// En programmation orientée objet, les getters et les setters sont deux types de méthodes utilisées pour accéder et modifier les propriétés d'un objet.

// Les getters sont des méthodes publiques qui permettent d'accéder aux propriétés privées d'un objet. Ils ne modifient pas la propriété, mais simplement la renvoient sous forme de valeur. Les getters sont généralement nommés en préfixant "get" suivi du nom de la propriété. Par exemple, pour une propriété $nom, le getter serait nommé getNom().

// Les setters, quant à eux, sont des méthodes publiques qui permettent de modifier les propriétés privées d'un objet. Ils prennent en argument une nouvelle valeur pour la propriété et modifient cette propriété en conséquence. Les setters sont généralement nommés en préfixant "set" suivi du nom de la propriété. Par exemple, pour une propriété $nom, le setter serait nommé setNom($nouveauNom).

// Voici un exemple d'une classe Personne qui utilise des getters et des setters pour accéder et modifier ses propriétés privées :
    class Personne {
        private $nom;
        private $age;
        
        public function __construct($nom, $age) {
            $this->nom = $nom;
            $this->age = $age;
        }
        
        public function getNom() {
            return $this->nom;
        }
        
        public function setNom($nouveauNom) {
            $this->nom = $nouveauNom;
        }
        
        public function getAge() {
            return $this->age;
        }
        
        public function setAge($nouvelAge) {
            $this->age = $nouvelAge;
        }
    }
//     Dans cet exemple, la classe Personne a deux propriétés privées : $nom et $age. Elle possède également deux paires de getters et setters pour chacune de ces propriétés, qui permettent d'accéder et de modifier les propriétés respectives.

// On peut utiliser cette classe de la manière suivante :

$personne1 = new Personne("Alice", 25);

// Accès aux propriétés avec les getters
echo $personne1->getNom(); // affiche "Alice"
echo $personne1->getAge(); // affiche 25

// Modification des propriétés avec les setters
$personne1->setNom("Bob");
$personne1->setAge(30);

// Nouvel accès aux propriétés avec les getters
echo $personne1->getNom(); // affiche "Bob"
echo $personne1->getAge(); // affiche 30
// Ici, on utilise les getters pour accéder aux propriétés privées de l'objet $personne1, puis on utilise les setters pour modifier ces propriétés. On peut ensuite à nouveau utiliser les getters pour vérifier que les modifications ont été effectuées.

?>
