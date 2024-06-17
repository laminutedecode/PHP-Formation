
<?php
if(isset($_POST['submit'])){
	session_start();
	$_SESSION['nom'] = $_POST['nom'];
	header('location: compte.php');
}

if(isset($_POST['save']) && $_POST['save'] == 'on') {
	setcookie('name', $name, time()+3600, null,null,false,true);
 } else {
	// Le champ de type checkbox n'est pas coché
 }
 


?>



<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de saisie</title>
</head>
<body>
	<?php
	if(isset($_COOKIE['name'])){
		$valeur = 'value"'.$_COOKIE['name'].'"';
	}else {
		$valeur = '';
	}
	?>
	<form method="POST" action="">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom"<?= $valeur ;?>><br><br>
		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom"><br><br>
		<label for="save" >Garder les informations enregistrées :</label>
		<input type="checkbox" id="save" name="save"><br><br>
		<input type="submit" name="submit" value="Envoyer">
	</form>
</body>
</html>
