<?php
// Calculer le temps écoulé depuis le début de l'année jusqu'à maintenant
$timestamp_actuel = time();
$timestamp_debut_annee = strtotime('January 1st');
$temps_ecoule = $timestamp_actuel - $timestamp_debut_annee;

// Convertir le temps écoulé en jours, heures, minutes et secondes
$jours = floor($temps_ecoule / (60 * 60 * 24));
$heures = floor(($temps_ecoule - ($jours * 60 * 60 * 24)) / (60 * 60));
$minutes = floor(($temps_ecoule - ($jours * 60 * 60 * 24) - ($heures * 60 * 60)) / 60);
$secondes = $temps_ecoule - ($jours * 60 * 60 * 24) - ($heures * 60 * 60) - ($minutes * 60);

// Afficher le temps écoulé
echo "Depuis le début de l'année, il s'est écoulé $jours jours, $heures heures, $minutes minutes et $secondes secondes.";
?>
