<?php
for ($i = 1; $i <= 10; $i++) {
  echo "<h2>Table de multiplication de $i</h2>";
  echo "<ul>";
  for ($j = 1; $j <= 10; $j++) {
    $resultat = $i * $j;
    echo "<li>$i x $j = $resultat</li>";
  }
  echo "</ul>";
}
// La première boucle for commence par initialiser la variable $i à 1 ($i = 1).
// La condition de la boucle spécifie que la boucle doit continuer tant que $i est inférieur ou égal à 10 ($i <= 10).
// À chaque itération de la boucle, on affiche une en-tête pour la table de multiplication correspondant à la valeur de $i.
// On ouvre une liste HTML (<ul>) pour afficher les résultats de la table de multiplication.
// La deuxième boucle for commence par initialiser la variable $j à 1 ($j = 1).
// La condition de la boucle spécifie que la boucle doit continuer tant que $j est inférieur ou égal à 10 ($j <= 10).
// À chaque itération de la boucle, on calcule le résultat de la multiplication de $i par $j.
// On affiche le résultat sous forme d'élément de liste (<li>) dans la liste HTML.
// À la fin de la deuxième boucle, on ferme la liste HTML.
// À la fin de la première boucle, on a affiché toutes les tables de multiplication de 1 à 10.
?>
