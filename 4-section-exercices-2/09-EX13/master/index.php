<?php
if(isset($_POST['age'])) {
    $age = $_POST['age'];
    $message = ($age >= 18) ? "Vous êtes majeur" : "Vous êtes mineur";
    echo $message . "<br>";
    echo "Votre âge est de " . $age . " ans.";
}
?>

<!-- Dans cet exemple, on utilise l'opérateur ternaire pour définir la valeur de la variable $message en fonction de la valeur de la variable $age. Si l'âge est supérieur ou égal à 18, $message vaut "Vous êtes majeur", sinon il vaut "Vous êtes mineur". Ensuite, on affiche ce message ainsi que l'âge de l'utilisateur grâce à la fonction echo. -->

<!DOCTYPE html>
<html>
<head>
	<title>Exemple d'utilisation de l'opérateur ternaire en PHP</title>
</head>
<body>
	<form method="POST" action="">
		<label for="age">Quel est votre âge ?</label>
		<input type="number" id="age" name="age" min="0" required>
		<br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>
