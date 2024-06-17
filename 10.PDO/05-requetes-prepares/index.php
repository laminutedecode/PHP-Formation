<?php

require_once('./cnx.php');

$sql = 'SELECT s.shop_id, s.shop_ville, e.emp_id, e.emp_nom, e.emp_prenom 
        FROM shop s 
        INNER JOIN employes e 
        ON s.shop_id = e.shop_id';

// Préparation de la requête
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Dans ce code, la requête est préparée à l'aide de la méthode prepare() de l'objet PDO. La méthode execute() est ensuite utilisée pour exécuter la requête. Les résultats sont récupérés à l'aide de la méthode fetch(), comme dans l'exemple précédent. Cependant, dans ce cas, la méthode fetch() est appelée sur l'objet PDOStatement retourné par la méthode prepare().

// Il est préférable d'utiliser des requêtes préparées pour plusieurs raisons :

// Sécurité : en utilisant des requêtes préparées, vous pouvez empêcher les attaques par injection SQL, qui sont des vulnérabilités de sécurité courantes dans les applications web. Les attaquants peuvent essayer d'insérer des instructions SQL malveillantes dans les champs de formulaire pour accéder aux données ou pour endommager la base de données.

// Performance : les requêtes préparées sont pré-compilées et stockées dans le cache du serveur de base de données, ce qui permet de les exécuter plus rapidement que les requêtes dynamiques, surtout lorsque vous exécutez plusieurs fois la même requête.

// Lisibilité du code : les requêtes préparées rendent le code plus facile à lire et à comprendre car elles séparent clairement la logique SQL de la logique de l'application.


// Affichage des résultats dans un tableau HTML
echo '<table>';
echo '<tr><th>Shop ID</th><th>Shop Ville</th><th>Employé ID</th><th>Nom</th><th>Prénom</th></tr>';
while ($donnees = $stmt->fetch()) {
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
$pdo = null;


?>