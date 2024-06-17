<?php
// La Programmation Orientée Objet (POO) est un paradigme de programmation qui permet d'organiser le code en termes d'objets, qui sont des instances de classes. En PHP, la POO est très largement utilisée pour la conception d'applications web, notamment pour la manipulation de données, l'interaction avec des bases de données et la création d'interfaces utilisateur.

// En POO, les objets sont des entités qui possèdent des propriétés et des méthodes. Les propriétés sont des variables qui représentent l'état de l'objet, tandis que les méthodes sont des fonctions qui permettent de manipuler cet état. Les classes, quant à elles, sont des modèles à partir desquels sont créés les objets.

// En PHP, pour définir une classe, on utilise le mot clé class suivi du nom de la classe et d'une paire de parenthèses. À l'intérieur de ces parenthèses, on peut définir les propriétés de la classe, sous forme de variables, et les méthodes, sous forme de fonctions.

// Par exemple, voici une classe PHP simplifiée représentant un livre :

class Livre {
    public $titre;
    public $auteur;
    public $annee;
    
    public function __construct($titre, $auteur, $annee) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->annee = $annee;
    }
    
    public function afficher() {
        echo $this->titre . ' - ' . $this->auteur . ' (' . $this->annee . ')';
    }
}

// Cette classe possède trois propriétés (titre, auteur et annee) et deux méthodes (un constructeur qui permet de créer un nouvel objet de type Livre et une méthode afficher qui permet d'afficher les propriétés du livre). Pour créer un objet de type Livre à partir de cette classe, on peut utiliser la syntaxe suivante :
$livre1 = new Livre('Le Petit Prince', 'Antoine de Saint-Exupéry', 1943);
$livre2 = new Livre('1984', 'George Orwell', 1949);

// On peut ensuite accéder aux propriétés et méthodes de chaque objet en utilisant la syntaxe $objet->propriete ou $objet->methode().

echo "Titre : " . $livre1->titre . "<br>";
echo "Auteur : " . $livre1->auteur . "<br>";
echo "Annee : " . $livre1->annee . " <br>";

echo "Titre : " . $livre2->titre . "<br>";
echo "Auteur : " . $livre2->auteur . "<br>";
echo "Annee : " . $livre2->annee . " <br>";
?>
