<?php

require_once('./cnx.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérification que le formulaire a été soumis

    // Récupération de l'identifiant de l'employé à supprimer
    $emp_id = $_POST['emp_id'];

    // Requête SQL pour supprimer l'employé
    $sql = 'DELETE FROM employes WHERE emp_id = :emp_id';
    $stmt = $pdo->prepare($sql);

    // Assignation de la valeur à la paramètre de la requête
    $stmt->bindParam(':emp_id', $emp_id);

    // Exécution de la requête
    $stmt->execute();

    // Redirection vers la page affichant la liste des employés
    header('Location: index.php');
    exit;
}

$pdo = null;

?>
