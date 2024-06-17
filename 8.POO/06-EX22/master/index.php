<?php
class Chien {
    private $nom;
    private $race;
    private $age;
    
    public function __construct($nom, $race, $age) {
        $this->nom = $nom;
        $this->race = $race;
        $this->age = $age;
    }
    
    public function aboyer() {
        echo "Le chien " . $this->nom . " de race " . $this->race . " aboie !";
    }
}

$chien1 = new Chien("Max", "Labrador", 3);
$chien1->aboyer();

?>