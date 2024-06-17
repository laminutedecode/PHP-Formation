<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de nombre entier</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="number">Entrez un nombre entier :</label>
        <input type="text" id="number" name="number">
        <input type="submit" name="submit" value="Soumettre">
    </form>
 
    <?php
    // Traitement du formulaire lors de la soumission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ "number" est vide
        if (empty($_POST["number"])) {
            echo "Le champ nombre est obligatoire";
        } else {
            // Vérifier si le nombre entré est un entier
            if (!filter_var($_POST["number"], FILTER_VALIDATE_INT)) {
                echo "Le nombre doit être un entier";
            } else {
                // Le nombre est un entier, donc nous pouvons le traiter
                $number = $_POST["number"];
                echo "Le nombre que vous avez entré est : $number";
            }
        }
    }
    ?>

<!-- Ce code utilise la fonction PHP filter_var() avec le filtre FILTER_VALIDATE_INT pour vérifier si le nombre entré est un entier. Si ce n'est pas le cas, un message d'erreur est affiché. Si le nombre est valide, le formulaire est traité et le nombre est affiché à l'utilisateur.

Notez que nous avons également utilisé la fonction htmlspecialchars() pour sécuriser les données saisies par l'utilisateur avant de les afficher sur la page. Cela empêche les attaques XSS (cross-site scripting) en convertissant les caractères spéciaux en entités HTML. -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Entrez votre nom :</label>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="Soumettre">
    </form>
 
    <?php
    // Traitement du formulaire lors de la soumission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si le champ "name" est vide
        if (empty($_POST["name"])) {
            echo "Le champ nom est obligatoire";
        } else {
            // Vérifier si le nom entré ne contient que des lettres alphabétiques
            if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
                echo "Le nom ne doit contenir que des lettres alphabétiques et des espaces";
            } else {
                // Le nom est valide, donc nous pouvons le traiter
                $name = $_POST["name"];
                echo "Votre nom est : $name";
            }
        }
    }
    ?>
</body>
</html>
