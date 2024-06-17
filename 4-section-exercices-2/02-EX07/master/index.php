
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["codepostal"])){
        $codepostal = $_POST["codepostal"];
        $pattern = "/^[0-9]{5}$/";
        
        if (preg_match($pattern, $codepostal)) {
            echo "Le code postal $codepostal est valide.";
        } else {
            echo "Le code postal $codepostal n'est pas valide.";
        }
    }
}

// Dans cet exemple, nous avons un formulaire HTML avec un champ de texte nommé codepostal. Lorsque l'utilisateur soumet le formulaire, les données sont envoyées à la page PHP.

// Nous vérifions si la méthode de requête est POST en utilisant $_SERVER["REQUEST_METHOD"]. Si c'est le cas, nous récupérons la valeur entrée dans le champ de texte en utilisant $_POST["codepostal"].

// Nous définissons ensuite une expression régulière $pattern qui est utilisée pour vérifier si le code postal entré correspond à un format valide. Le motif "/^[0-9]{5}$/" correspond à une chaîne de 5 chiffres exactement.

// Nous utilisons la fonction preg_match pour appliquer le motif à la chaîne de caractères $codepostal. Si la chaîne de caractères correspond au motif, la fonction retourne une valeur de 1, et nous affichons un message indiquant que le code postal est valide. Sinon, nous affichons un message indiquant que le code postal n'est pas valide.

// Notez que ce programme ne vérifie pas si le code postal entré est un vrai code postal français existant. Il vérifie simplement si la chaîne de caractères entrée correspond à un format valide pour un code postal français.

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
  <label for="codepostal">Entrez un code postal :</label>
  <input type="text" name="codepostal" id="codepostal">
  <button type="submit">Vérifier</button>
</form>

</body>
</html>