<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   

<?php
$nom = $_GET["nom"];
$email = $_GET["email"];

?>


<h1>Hello <?php echo $nom;?></h1>

<p>Votre mail est <?php echo $email; ?></p>


</body>
</html>

<!-- Dans cet exemple, les données envoyées via les variables GET sont stockées dans les variables $nom et $age en utilisant les variables GET $_GET["nom"] et $_GET["age"]. 

Il est important de noter que les variables GET sont moins sécurisées que les variables POST car elles sont affichées dans l'URL, et donc facilement accessibles par les utilisateurs. Il est donc recommandé de ne pas envoyer des données sensibles via des variables GET.

En conclusion, les variables GET en PHP permettent de récupérer les données envoyées via une URL. Les données sont stockées dans la chaîne de requête de l'URL et sont accessibles via les variables spéciales $_GET. Les variables GET sont moins sécurisées que les variables POST et il est donc recommandé de ne pas envoyer des données sensibles via des variables GET. -->