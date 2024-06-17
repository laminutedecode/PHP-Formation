<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GO AUTO</title>
</head>
<body>

<div id="container">
<?php include('./Assets/nav.php');?>
<?php include('./Assets/header.php');?>
<section>
<form action="#">
    <div class="input-data">
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" required>
        <div class="underline"></div>
    </div>
    <div class="input-data">
        <label for="nom">Nom</label>
        <input type="text" id="nom" required>
        <div class="underline"></div>
    </div>
    <div class="input-data">
        <label for="email">Email</label>
        <input type="email" id="email" required>
        <div class="underline"></div>
    </div>
    <div class="input-data">
        <label for="tel">Téléphone</label>
        <input type="tel" id="tel" required>
        <div class="underline"></div>
    </div>
    <div class="input-data textarea">
        <label for="message">Message</label>
        <textarea id="message" required></textarea>
        <div class="underline"></div>
    </div>
    
    <button>Envoyer le message</button>
</form>
</section>
<?php include('./Assets/footer.php');?>
</div>



</body>
</html>