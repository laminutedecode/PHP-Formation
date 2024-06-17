<?php

// Les getters sont des méthodes publiques qui permettent d'accéder aux propriétés privées ou protégées d'un objet depuis l'extérieur de la classe. Ils permettent d'encapsuler les propriétés de l'objet, c'est-à-dire de les protéger de tout accès direct et de garantir leur intégrité.

// Dans l'exemple de la classe Livre, il serait utile d'ajouter des getters pour accéder aux propriétés du livre. Voici comment on pourrait les ajouter :
class Livre {
    private $titre;
    private $auteur;
    private $annee;

    public function __construct($titre, $auteur, $annee) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->annee = $annee;
    }

    public function afficher() {
        echo $this->titre . ' - ' . $this->auteur . ' (' . $this->annee . ')';
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getAnnee() {
        return $this->annee;
    }
}

$livre1 = new Livre('Le Petit Prince', 'Antoine de Saint-Exupéry', 1943);
$livre2 = new Livre('1984', 'George Orwell', 1949);

echo "Titre : " . $livre1->getTitre() . "<br>";
echo "Auteur : " . $livre1->getAuteur() . "<br>";
echo "Annee : " . $livre1->getAnnee() . " <br>";

echo "Titre : " . $livre2->getTitre() . "<br>";
echo "Auteur : " . $livre2->getAuteur() . "<br>";
echo "Annee : " . $livre2->getAnnee() . " <br>";

?>
