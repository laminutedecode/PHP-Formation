<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- Dans cet exemple, le formulaire contient deux champs : un champ "nom" et un champ "email". Lorsque l'utilisateur soumet le formulaire en cliquant sur le bouton "Envoyer", les données sont envoyées au script "traitement.php" via la méthode POST.

Pour récupérer les données envoyées via la méthode POST, il faut utiliser les variables spéciales $_POST["nom"] et $_POST["email"]. Par exemple : -->

<?php
$nom = $_POST["nom"];
$email = $_POST["email"];

echo "Le nom est : ".$nom;
echo "L'email est : ".$email;
?>

<!-- Dans cet exemple, les données envoyées via le formulaire sont stockées dans les variables $nom et $email en utilisant les variables POST $_POST["nom"] et $_POST["email"]. Les données sont ensuite affichées à l'écran à l'aide de la fonction echo.

Il est important de noter que les variables POST ne sont pas initialisées tant que le formulaire n'est pas soumis. Par conséquent, il est recommandé de vérifier si les variables POST existent avant de les utiliser pour éviter des erreurs.

En conclusion, les variables POST en PHP permettent de récupérer les données envoyées par un formulaire HTML via la méthode POST. Les données sont stockées dans des variables spéciales appelées "variables POST" ($_POST). Il est important de vérifier si les variables POST existent avant de les utiliser pour éviter des erreurs. -->
</body>
</html>