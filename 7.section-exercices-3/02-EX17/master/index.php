<?php
// Vérifier si un cookie de langue existe déjà
if (isset($_COOKIE['lang'])) {
    // Si oui, utiliser la langue stockée dans le cookie
    $lang = $_COOKIE['lang'];
} else {
    // Sinon, utiliser la langue par défaut (français)
    $lang = 'fr';
}

// Si le formulaire a été soumis, mettre à jour la langue dans le cookie
if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];
    setcookie('lang', $lang, time() + (86400 * 30), '/'); // Le cookie expire dans 30 jours
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Afficher le formulaire de choix de langue
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
</head>
<body>
    <?php if ($lang === 'fr') : ?>
        <h1>Bienvenue sur mon site web !</h1>
    <?php elseif ($lang === 'en') : ?>
        <h1>Welcome to my website!</h1>
    <?php elseif ($lang === 'es') : ?>
        <h1>¡Bienvenido a mi sitio web!</h1>
    <?php endif; ?>

    <form method="post" action="">
        <label for="lang">Langue :</label>
        <select name="lang" id="lang">
            <option value="fr" <?php if ($lang === 'fr') echo 'selected'; ?>>Français</option>
            <option value="en" <?php if ($lang === 'en') echo 'selected'; ?>>English</option>
            <option value="es" <?php if ($lang === 'es') echo 'selected'; ?>>Español</option>
        </select>
        <br>
        <input type="submit" value="Sauvegarder">
    </form>
</body>
</html>
