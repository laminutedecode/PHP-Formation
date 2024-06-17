<?php
// Le principe d'encapsulation en PHP avec les classes consiste à regrouper des données et des fonctions connexes au sein d'un objet et à restreindre l'accès aux données pour que seul le code de l'objet puisse y accéder et les modifier.

// En PHP, cela se réalise en définissant des propriétés de classe comme étant private ou protected, ce qui empêche les autres parties du code d'y accéder directement. Pour accéder à ces propriétés depuis l'extérieur de la classe, on utilise des méthodes appelées accesseurs (getters) et mutateurs (setters), qui permettent de récupérer ou de modifier les propriétés en respectant les règles définies par la classe.

// L'encapsulation permet de limiter les interactions externes avec l'objet, ce qui facilite la maintenance et la gestion du code. Elle permet également de protéger les données et d'éviter les modifications non désirées, ce qui peut améliorer la sécurité et la fiabilité du programme.

// Voici un exemple d'encapsulation en PHP avec une classe "Personne" qui utilise des propriétés privées et des méthodes publiques pour accéder à ces propriétés de manière contrôlée :
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
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        if ($age >= 0 && $age <= 120) {
            $this->age = $age;
        } else {
            echo "Âge invalide";
        }
    }
}
// Dans cette classe, les propriétés "nom" et "age" sont déclarées comme privées, ce qui signifie qu'elles ne peuvent être accédées ou modifiées directement à partir de l'extérieur de la classe.

// Pour accéder à ces propriétés, la classe définit des méthodes publiques appelées "getters" et "setters" qui permettent d'obtenir ou de modifier les valeurs de ces propriétés de manière contrôlée.

// Par exemple, la méthode "getNom" permet de retourner la valeur de la propriété "nom", tandis que la méthode "setNom" permet de modifier cette valeur en utilisant un paramètre.

// De cette manière, la classe "Personne" assure une meilleure encapsulation des données en contrôlant l'accès aux propriétés et en évitant les modifications non autorisées.


?>
