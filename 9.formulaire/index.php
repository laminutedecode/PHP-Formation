<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
<h1>Nous contacter</h1>

<?php

include('./contact.php')

?>

<form method="POST">
    <input type="text" name="nom" placeholder="Indiquez votre nom"> <br/>
    <input type="text" name="prenom" placeholder="Indiquez votre prenom"> <br/>
    <input type="email" name="email" placeholder="Indiquez votre e-mail"> <br/>
    <textarea name="message" name="message"  placeholder="Votre message"></textarea><br/>
    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>

    <input type="submit" name="submit" value="Envoyer"> <br/>

</form>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>