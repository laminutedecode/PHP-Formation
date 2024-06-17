<?php

class Voiture {
    private $marque;
    private $modele;
    public $annee;
    public $couleur;
    public $vitesse_actuelle = 0;
    
    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }
    
    public function afficher() {
        echo $this->marque . ' - ' . $this->modele . ' (' . $this->annee . ') - ' . $this->couleur . ' - Vitesse : ' . $this->vitesse_actuelle . ' km/h';
    }
    
    public function accelerer($vitesse) {
        $this->vitesse_actuelle += $vitesse;
    }
}

// Exemple d'utilisation
$voiture1 = new Voiture('Renault', 'Clio');
$voiture1->annee = 2020;
$voiture1->couleur = 'rouge';
$voiture1->accelerer(50);
$voiture1->afficher();
// affiche : Renault - Clio (2020) - rouge - Vitesse : 50 km/h

?>
