

<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
  // Récupération des données du formulaire POST
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  
  // Affichage du message de bienvenue personnalisé
  echo "Bienvenue " . $prenom . " " . $nom . " !";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de saisie</title>
</head>
<body>
  <form method="post" action="">
    Nom : <input type="text" name="nom"><br>
    Prénom : <input type="text" name="prenom"><br>
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>


<!-- Explication :

Le code utilise la fonction isset() pour vérifier si les variables POST "nom" et "prenom" sont définies. Si les variables sont définies, le code récupère les valeurs et affiche un message de bienvenue personnalisé en utilisant les variables récupérées.

Le formulaire HTML utilise la méthode POST pour soumettre les données du formulaire. L'action du formulaire est définie sur la page actuelle ("") pour permettre le traitement des données sur la même page. Les champs nom et prénom sont définis avec la balise input de type texte, et le bouton d'envoi est défini avec la balise input de type submit. -->

