<?php
class Produit {
  private static $panier = 0;

  public static function setPanier($quantite) {
    self::$panier = $quantite;
  }

  public static function getPanier() {
    return self::$panier;
  }

  private $nom;
  private $prix;
  private $quantite = 0;

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function setPrix($prix) {
    $this->prix = $prix;
  }

  public function setQuantite($quantite) {
    $this->quantite = $quantite;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getPrix() {
    return $this->prix;
  }

  public function getQuantite() {
    return $this->quantite;
  }

  public function Calcul() {
   if( (!empty($this->prix)) && (!empty($this->quantite)))
   {
    return $this->prix * $this->quantite;
   }
  }
}
?>
