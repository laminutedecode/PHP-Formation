<?php


// En PHP, les regex (expressions régulières) sont des chaînes de caractères qui permettent de décrire un motif ou un modèle de texte que l'on souhaite rechercher ou extraire.

// Les expressions régulières en PHP sont définies avec des délimiteurs, qui sont des caractères qui entourent l'expression régulière et qui indiquent où elle commence et où elle se termine. Le délimiteur le plus courant est le slash ("/"), mais il est possible d'utiliser d'autres caractères comme le dièse ("#") ou le point-virgule (";").

// Voici un exemple simple d'utilisation d'une expression régulière en PHP pour rechercher une chaîne de caractères dans un texte :

$texte = "Bonjour, je m'appelle Jean";
$pattern = "/Jean/";
if (preg_match($pattern, $texte)) {
    echo "Le texte contient 'Jean'.";
} else {
    echo "Le texte ne contient pas 'Jean'.";
}


// Dans cet exemple, la fonction preg_match() permet de chercher le motif "/Jean/" dans la variable $texte. Si le motif est trouvé, la condition if retourne true et le message "Le texte contient 'Jean'." est affiché, sinon le message "Le texte ne contient pas 'Jean'." est affiché.

// Il existe de nombreuses fonctions PHP pour manipuler les expressions régulières, comme preg_replace() qui permet de remplacer un motif par une autre chaîne de caractères, ou encore preg_split() qui permet de diviser une chaîne de caractères en fonction d'un motif.

// Un "pattern" (motif en français) est une expression régulière qui décrit un modèle de texte que l'on souhaite rechercher ou extraire. En d'autres termes, c'est une séquence de caractères qui permet de décrire un format spécifique de chaînes de caractères.

// En PHP, les expressions régulières sont généralement écrites en utilisant des caractères spéciaux (méta-caractères) qui ont une signification particulière. Par exemple, le point (.) est utilisé pour représenter n'importe quel caractère, tandis que l'astérisque (*) est utilisé pour indiquer qu'un caractère peut apparaître zéro fois ou plus.

// Voici quelques exemples de méta-caractères couramment utilisés dans les expressions régulières en PHP :

// . : Représente n'importe quel caractère.
// * : Indique que le caractère précédent peut apparaître zéro fois ou plus.
// + : Indique que le caractère précédent doit apparaître au moins une fois.
// ? : Indique que le caractère précédent peut apparaître zéro ou une seule fois.
// ^ : Indique que la chaîne de caractères doit commencer par le caractère ou le groupe de caractères qui suit.
// $ : Indique que la chaîne de caractères doit se terminer par le caractère ou le groupe de caractères qui précède.
// [ ] : Indique une classe de caractères, qui permet de spécifier un ensemble de caractères possibles.
// \ : Permet d'échapper un caractère spécial pour qu'il soit interprété littéralement.
// Voici un exemple simple d'utilisation de ces méta-caractères pour rechercher une adresse email dans un texte :

$texte2 = "Mon adresse email est john.doe@example.com";
$pattern2 = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i";
if (preg_match($pattern2, $texte2, $matches)) {
    echo "L'adresse email est : " . $matches[0];
} else {
    echo "Aucune adresse email n'a été trouvée.";

}






// avec formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST["texte"];
    $pattern = "/[A-Z][a-z]+/";

    if (preg_match_all($pattern, $texte, $matches)) {
        echo "Les mots commençant par une majuscule sont : ";
        foreach ($matches[0] as $mot) {
            echo "$mot ";
        }
    } else {
        echo "Aucun mot commençant par une majuscule n'a été trouvé.";
    }
}
// Dans cet exemple, nous avons un formulaire HTML avec un champ de texte nommé texte. Lorsque l'utilisateur soumet le formulaire, les données sont envoyées à la page PHP.

// Nous vérifions si la méthode de requête est POST en utilisant $_SERVER["REQUEST_METHOD"]. Si c'est le cas, nous récupérons la valeur entrée dans le champ de texte en utilisant $_POST["texte"].

// Nous définissons ensuite une expression régulière $pattern qui est utilisée pour rechercher les mots commençant par une majuscule dans la chaîne de caractères.

// Le reste du code est identique à l'exemple précédent. Nous utilisons la fonction preg_match_all pour appliquer le motif à la chaîne de caractères $texte. Si des mots commençant par une majuscule sont trouvés, nous affichons chaque mot avec une boucle foreach. Sinon, nous affichons un message indiquant qu'aucun mot commençant par une majuscule n'a été trouvé.

// Notez que dans un vrai site web, vous devriez valider les données entrées par l'utilisateur et échapper les caractères spéciaux pour éviter les attaques par injection de code.
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <label for="texte">Entrez votre texte :</label>
  <input type="text" name="texte" id="texte">
  <button type="submit">Rechercher</button>
</form>

</body>
</html>