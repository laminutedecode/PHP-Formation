<?php
// Démarrer une session
session_start();

// Si l'utilisateur est déjà connecté, le rediriger vers la page protégée
if (isset($_SESSION['username'])) {
    header('Location: compte.php');
    exit();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Vérifier les informations de connexion de l'utilisateur
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Remplacer ce code par la vérification réelle des informations de connexion
    if ($username === 'Jonathan' && $password === '1234') {
        // Stocker le nom d'utilisateur dans la session
        $_SESSION['username'] = $username;
        
        // Rediriger l'utilisateur vers la page protégée
        header('Location: compte.php');
        exit();
    } else {
        // Afficher un message d'erreur
        $error = 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}

// Afficher le formulaire de connexion
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page de connexion</title>
</head>
<body>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
