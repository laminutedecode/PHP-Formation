<?php
// Afficher la date et l'heure actuelles
$date_actuelle = date('Y-m-d H:i:s');
echo "Date et heure actuelles : $date_actuelle<br>";

// Ajouter 24 heures à la date actuelle
$date_futur = date('Y-m-d H:i:s', strtotime('+24 hours'));
echo "Date et heure dans 24 heures : $date_futur";
?>
