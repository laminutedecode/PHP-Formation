<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- isset est une fonction en PHP qui permet de vérifier si une variable est définie et non nulle. La fonction retourne true si la variable est définie et non nulle, et false sinon.

La syntaxe de la fonction isset est la suivante : -->

<?php 
isset($variable);
 ?>


<!-- Où $variable est la variable que vous voulez vérifier.

Voici quelques exemples d'utilisation de isset : -->


<?php 

$nom = "jo";
$a = 5;
$b = 2;

// Vérifie si la variable $nom est définie
if (isset($nom)) {
  echo "Bonjour $nom !";
}

// Vérifie si les variables $a et $b sont définies
if (isset($a) && isset($b)) {
  $somme = $a + $b;
  echo "La somme de $a et $b est égale à $somme.";
}

// Vérifie si un paramètre GET est présent dans l'URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // faire quelque chose avec l'id...
}
// Dans le premier exemple, la fonction isset est utilisée pour vérifier si la variable $nom est définie avant d'afficher un message de salutation. Dans le deuxième exemple, la fonction isset est utilisée pour vérifier si les variables $a et $b sont définies avant de calculer leur somme. Dans le troisième exemple, la fonction isset est utilisée pour vérifier si un paramètre GET nommé id est présent dans l'URL avant de faire quelque chose avec cet identifiant.

// En général, il est recommandé d'utiliser la fonction isset pour vérifier si une variable est définie avant de l'utiliser dans votre code, afin d'éviter les erreurs de type "Undefined variable".
 ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom">

		<label for="email">E-mail :</label>
		<input type="email" name="email" id="email">

		<input type="submit" name="submit" value="Envoyer">
	</form>

	<?php
	// Vérification si le formulaire a été soumis
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// $_SERVER["REQUEST_METHOD"] est une variable superglobale en PHP qui contient la méthode HTTP utilisée pour accéder à la page en cours.

// Dans l'exemple de formulaire que j'ai fourni précédemment, $_SERVER["REQUEST_METHOD"] est utilisée pour vérifier si le formulaire a été soumis. Plus précisément, cette variable est utilisée pour vérifier si la méthode HTTP utilisée est "POST", ce qui signifie que les données du formulaire ont été envoyées avec la requête POST HTTP.

		// Vérification si les champs nom et email existent
		if (isset($_POST["nom"]) && isset($_POST["email"])) {
			$nom = $_POST["nom"];
			$email = $_POST["email"];
			echo "Bonjour " . $nom . ", votre e-mail est " . $email;
		} else {
			echo "Veuillez remplir tous les champs";
		}
	}
	?>

<!-- Dans cet exemple, un formulaire HTML est créé avec des champs pour le nom et l'e-mail. Lorsque l'utilisateur soumet le formulaire en cliquant sur le bouton "Envoyer", le code PHP vérifie si les champs nom et email existent à l'aide de la fonction isset. Si les deux champs existent, le nom et l'e-mail sont affichés à l'utilisateur. Si l'un ou l'autre des champs n'existe pas, un message d'erreur est affiché demandant à l'utilisateur de remplir tous les champs.

La fonction isset est utilisée pour vérifier si une variable existe et a une valeur définie. Dans cet exemple, isset($_POST["nom"]) vérifie si le champ de formulaire nom a été soumis et a une valeur définie, et isset($_POST["email"]) vérifie si le champ de formulaire e-mail a été soumis et a une valeur définie. Si les deux conditions sont vraies, cela signifie que les deux champs de formulaire ont été remplis et ont des valeurs définies, et donc que les données peuvent être récupérées et traitées. -->
</body>
</html>