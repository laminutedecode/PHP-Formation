
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie</title>
</head>
<body>
        <!-- Dans ce formulaire, nous avons utilisé la méthode POST pour envoyer les données saisies par l'utilisateur à la page de traitement. Nous avons également défini un champ de saisie pour le nom de l'utilisateur, avec l'attribut "name" qui sera utilisé pour récupérer les données côté serveur.
    
    -->
	<form method="POST" action="traitement.php">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom"><br><br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>

