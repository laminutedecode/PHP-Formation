<!DOCTYPE html>
<html>
<head>
	<title>Page de traitement</title>
</head>
<body>
	<?php
		if(isset($_POST['nom'])) {
			$nom = $_POST['nom'];
			echo "Bonjour " . $nom . ", merci d'avoir rempli le formulaire !";
		}
	?>
</body>
</html>

