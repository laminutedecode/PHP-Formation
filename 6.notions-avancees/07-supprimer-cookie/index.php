

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie</title>
</head>
<body>




	<form method="POST" action="traitement.php">
		<label for="nom" >Nom :</label>
		<input type="text" id="nom" name="nom" value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>"><br><br>
		
		<label for="age">Âge :</label>
		<input type="text" id="age" name="age"><br><br>

		<input type="submit" value="Envoyer">
	</form>

</body>
</html>
