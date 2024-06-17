<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>

<!-- Pour écrire du code PHP, vous devez d'abord créer un fichier avec une extension .php, par exemple "monfichier.php". Dans ce fichier, vous pouvez écrire du code PHP en utilisant des balises spéciales . -->
<?php ?>

<!--ces balises sont utilisées pour indiquer au serveur Web que le code qui suit est du code PHP. Tous les codes PHP doivent être compris entre ces balises. Par exemple, si vous voulez afficher "Bonjour, tous le monde!" en utilisant du code PHP, vous pouvez écrire :  -->

<?php
echo "Bonjour, tous le monde!";
?>

<!-- La fonction "echo" en PHP est utilisée pour afficher du texte ou des données sur la page Web. Elle peut être utilisée pour afficher des chaînes de caractères, des variables, des tableaux ou des objets. -->
<h1>Hello depuis le php</h1>

<?php
$nom = "Jean";
echo "Bonjour, ".$nom."!";
?>

<!-- je peut mettre également des balises html -->

<?php
$nom = "Carlos";
echo "<p>Bonjour, ".$nom."! </p>";
?>

<!-- je peux rajouter des classes css -->
<?php
$nom = "Maria";
echo "<p class='txt'>Bonjour, ".$nom."! </p>";
?>

    
</body>
</html>