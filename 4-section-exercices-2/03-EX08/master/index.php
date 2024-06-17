<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
	if (preg_match($pattern, $email)) {
		echo "L'adresse email $email est valide.";
	} else {
		echo "L'adresse email $email n'est pas valide.";
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de contact</title>
</head>
<body>
	<h2>Entrez votre adresse email :</h2>
	<form method="post" action="">
		<label for="email">Email :</label>
		<input type="text" name="email" id="email" required>
		<br><br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>
