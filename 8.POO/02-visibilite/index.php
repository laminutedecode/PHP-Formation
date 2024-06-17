<?php
// En PHP, les mots-clés public et private sont utilisés pour définir la portée des propriétés et des méthodes d'une classe.

// Une propriété ou une méthode définie comme public peut être accédée à partir de n'importe où dans le code, y compris en dehors de la classe. Par exemple, dans la classe Livre que nous avons vue précédemment, les propriétés titre, auteur et annee sont définies comme public, ce qui signifie qu'elles peuvent être accédées et modifiées depuis l'extérieur de la classe.

// En revanche, une propriété ou une méthode définie comme private ne peut être accédée qu'à partir de l'intérieur de la classe. Elle est donc cachée à l'extérieur de la classe et ne peut être utilisée ou modifiée que par les méthodes de la classe elle-même.

// Par exemple, si on avait défini la propriété titre comme private, on ne pourrait pas l'afficher directement à partir du code à l'extérieur de la classe. On devrait plutôt ajouter une méthode publique dans la classe qui permettrait d'afficher cette propriété :
class Livre {
    private $titre;
    public $auteur;
    public $annee;
    
    public function __construct($titre, $auteur, $annee) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->annee = $annee;
    }
    
    public function afficherTitre() {
        echo $this->titre;
    }
    
    public function afficher() {
        echo "Titre : " . $this->titre . "<br>";
        echo "Auteur : " . $this->auteur . "<br>";
        echo "Annee : " . $this->annee . " <br>";
    }
}

$livre1 = new Livre('Le Petit Prince', 'Antoine de Saint-Exupéry', 1943);
$livre2 = new Livre('1984', 'George Orwell', 1949);

$livre1->afficher();
echo "<br>";
$livre2->afficher();
    

// Dans cet exemple, la propriété $titre est définie comme private, ce qui signifie qu'elle ne peut être accédée qu'à partir des méthodes de la classe elle-même, comme afficherTitre() ou afficher(). La méthode afficherTitre() est une méthode publique qui permet d'afficher le titre du livre à partir de l'extérieur de la classe. Elle peut accéder à la propriété $titre car elle fait partie de la même classe.

// En résumé, public et private sont des modificateurs d'accès qui permettent de contrôler la visibilité des propriétés et des méthodes d'une classe. public rend les propriétés et méthodes accessibles depuis l'extérieur de la classe, alors que private les cache à l'extérieur de la classe et les rend accessibles uniquement depuis l'intérieur de la classe.
?>
