<!-- Les cookies en PHP sont de petits fichiers texte stockés sur l'ordinateur d'un utilisateur qui peuvent être utilisés pour stocker des informations sur les préférences d'un utilisateur ou pour suivre les actions de l'utilisateur sur un site web. Ils sont stockés sur le navigateur de l'utilisateur et peuvent être lus par le serveur web lors de chaque demande de page.

Le fonctionnement des cookies en PHP est le suivant :

Création du cookie : Le serveur web envoie un en-tête HTTP "Set-Cookie" au navigateur de l'utilisateur, qui contient les informations que le cookie doit stocker, telles que le nom, la valeur, la date d'expiration, le domaine et le chemin d'accès.

Stockage du cookie : Le navigateur de l'utilisateur stocke le cookie sur l'ordinateur de l'utilisateur. Lorsque l'utilisateur visite à nouveau le site web, le navigateur envoie le cookie au serveur web avec chaque demande de page.

Lecture du cookie : Le serveur web peut lire le cookie envoyé par le navigateur de l'utilisateur avec chaque demande de page. Les informations stockées dans le cookie peuvent être utilisées pour personnaliser la page pour l'utilisateur ou pour suivre ses actions sur le site web.

Modification du cookie : Le serveur web peut également modifier les informations stockées dans le cookie en envoyant un nouvel en-tête "Set-Cookie" avec de nouvelles valeurs.

Suppression du cookie : Le serveur web peut également supprimer un cookie en envoyant un en-tête "Set-Cookie" avec une date d'expiration passée, ce qui entraîne la suppression du cookie du navigateur de l'utilisateur. -->

<!-- La fonction setcookie en PHP permet de créer un cookie et d'envoyer ce cookie au navigateur de l'utilisateur. La syntaxe de la fonction est la suivante : -->

<!-- setcookie(nom, valeur, expire, chemin, domaine, securite, httponly); -->

<!-- 
	nom : le nom du cookie (chaîne de caractères)
valeur : la valeur du cookie (chaîne de caractères)
expire : la date d'expiration du cookie, en timestamp (nombre de secondes depuis le 1er janvier 1970) ou sous forme de chaîne de caractères au format date (par exemple : "Sat, 01 Jan 2023 00:00:00 GMT"). Si ce paramètre n'est pas spécifié, le cookie expirera à la fin de la session.
chemin : le chemin du cookie (chaîne de caractères). Si ce paramètre n'est pas spécifié, le cookie sera disponible sur toutes les pages du site.
domaine : le domaine du cookie (chaîne de caractères). Si ce paramètre n'est pas spécifié, le cookie sera disponible sur le domaine courant.
securite : une valeur booléenne qui indique si le cookie doit être envoyé uniquement via une connexion sécurisée (https). Par défaut, ce paramètre est à false.
httponly : une valeur booléenne qui indique si le cookie ne doit être accessible que via HTTP. Par défaut, ce paramètre est à false. -->

<!-- Il est important de noter que la fonction setcookie doit être appelée avant tout envoi de contenu HTML (avant le tag <html>), sinon elle ne fonctionnera pas.

 -->


<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie</title>
</head>
<body>




	<form method="POST" action="traitement.php">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom"><br><br>
		
		<label for="age">Âge :</label>
		<input type="text" id="age" name="age"><br><br>

		<input type="submit" value="Envoyer">
	</form>

</body>
</html>
