<?php
// En PHP, une session est un mécanisme qui permet de stocker des données côté serveur pour un utilisateur spécifique, tout au long de sa visite sur un site web. Les données stockées dans une session peuvent être utilisées pour garder une trace de l'état de l'utilisateur ou pour stocker des informations spécifiques à l'utilisateur, telles que son nom d'utilisateur ou son panier d'achat.

// Lorsqu'un utilisateur visite un site web, un identifiant de session unique est généré pour cet utilisateur. Ce numéro d'identification est stocké sur le serveur et renvoyé à l'utilisateur sous la forme d'un cookie ou d'un paramètre d'URL. Ce cookie ou ce paramètre est ensuite utilisé pour identifier l'utilisateur lorsqu'il effectue des requêtes ultérieures.

// Les variables de session en PHP sont stockées dans un tableau associatif appelé $_SESSION. Pour stocker des données dans une session, vous pouvez simplement affecter une valeur à une clé spécifique dans ce tableau. 


// Inclure la fonction session_start() pour démarrer une session
session_start();

// Il est important de noter que pour utiliser les sessions en PHP, la fonction session_start() doit être appelée avant toute sortie HTML ou texte sur la page. La fonction session_start() initialise ou restaure une session existante pour l'utilisateur courant, en utilisant l'identifiant de session stocké dans un cookie ou un paramètre d'URL.


?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie</title>
</head>
<body>

	<form method="POST" action="traitement.php">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom"><br><br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>

