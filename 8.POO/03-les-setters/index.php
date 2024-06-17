<?php

// En programmation orientée objet, les setters sont des méthodes qui permettent de modifier les valeurs des propriétés d'un objet. Dans PHP, les setters sont généralement définis en utilisant le préfixe "set" suivi du nom de la propriété à modifier.
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
        echo "<p>{$this->titre} - {$this->auteur} ({$this->annee})</p>";
    }
    
    public function setTitre($titre) {
        $this->titre = $titre;
    }
    
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }
    
    public function setAnnee($annee) {
        $this->annee = $annee;
    }
}

$livre1 = new Livre('Le Petit Prince', 'Antoine de Saint-Exupéry', 1943);
$livre2 = new Livre('1984', 'George Orwell', 1949);

// Utilisation des setters pour changer les propriétés des livres
if(isset($_POST['titre1'])) {
    $livre1->setTitre($_POST['titre1']);
}
if(isset($_POST['auteur1'])) {
    $livre1->setAuteur($_POST['auteur1']);
}
if(isset($_POST['annee1'])) {
    $livre1->setAnnee($_POST['annee1']);
}

if(isset($_POST['titre2'])) {
    $livre2->setTitre($_POST['titre2']);
}
if(isset($_POST['auteur2'])) {
    $livre2->setAuteur($_POST['auteur2']);
}
if(isset($_POST['annee2'])) {
    $livre2->setAnnee($_POST['annee2']);
}

// Affichage des propriétés des livres et des formulaires pour les modifier
echo "<div>";
$livre1->afficher();
echo "<form method='post'>
            <label for='titre1'>Titre : </label><input type='text' name='titre1' value='$livre1->titre'><br>
            <label for='auteur1'>Auteur : </label><input type='text' name='auteur1' value='$livre1->auteur'><br>
            <label for='annee1'>Annee : </label><input type='text' name='annee1' value='$livre1->annee'><br>
            <button type='submit'>Modifier livre 1</button>
        </form>";
echo "</div>";

echo "<div>";
$livre2->afficher();
echo '<form method="post">';
echo '<h2>Livre 2</h2>';
echo '<p>Titre : <input type="text" name="titre2" value="'.$livre2->titre.'"></p>';
echo '<p>Auteur : <input type="text" name="auteur2" value="'.$livre2->auteur.'"></p>';
echo '<p>Année : <input type="text" name="annee2" value="'.$livre2->annee.'"></p>';
echo '<button type="submit">Modifier livre 2</button>';
echo '</form>';

?>
