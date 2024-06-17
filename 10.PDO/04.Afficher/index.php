<?php

require_once('./cnx.php');

$sql = 'SELECT s.shop_id, s.shop_ville, e.emp_id, e.emp_nom, e.emp_prenom 
        FROM shop s 
        INNER JOIN employes e 
        ON s.shop_id = e.shop_id';

// Exécution de la requête
$resultat = $pdo->query($sql);

// Affichage des résultats dans un tableau HTML
echo '<table>';
echo '<tr><th>Shop ID</th><th>Shop Ville</th><th>Employé ID</th><th>Nom</th><th>Prénom</th></tr>';
while ($donnees = $resultat->fetch()) {
    echo '<tr>';
    echo '<td>' . $donnees['shop_id'] . '</td>';
    echo '<td>' . $donnees['shop_ville'] . '</td>';
    echo '<td>' . $donnees['emp_id'] . '</td>';
    echo '<td>' . $donnees['emp_nom'] . '</td>';
    echo '<td>' . $donnees['emp_prenom'] . '</td>';
    echo '</tr>';
}
echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;

?>