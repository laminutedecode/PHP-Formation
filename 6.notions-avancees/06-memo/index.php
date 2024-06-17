

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie</title>
</head>
<body>




	<form method="POST" action="traitement.php">
		<label for="nom" >Nom :</label>
		<input type="text" id="nom" name="nom" value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>"><br><br>

		<!-- Pour sécuriser l'affichage du cookie, vous pouvez utiliser la fonction htmlspecialchars() de PHP pour convertir les caractères spéciaux en entités HTML.
		De cette façon, les caractères spéciaux dans la valeur du cookie seront convertis en entités HTML, ce qui empêchera toute tentative d'injection de code malveillant. -->
		
		<label for="age">Âge :</label>
		<input type="text" id="age" name="age"><br><br>

		<input type="submit" value="Envoyer">
	</form>

</body>
</html>
