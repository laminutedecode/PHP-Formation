<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, les variables POST sont des variables qui contiennent les données envoyées par un formulaire HTML. Lorsqu'un utilisateur soumet un formulaire, les données sont envoyées au serveur PHP via la méthode POST. Les données sont ensuite stockées dans des variables spéciales appelées "variables POST".

Voici un exemple de formulaire HTML qui envoie des données via la méthode POST : -->

<form action="traitement.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">

    <label for="email">Email :</label>
    <input type="email" id="email" name="email">

    <input type="submit" value="Envoyer">
</form>




</body>
</html>