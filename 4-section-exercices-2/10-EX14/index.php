<?php
session_start();

// Vérifie si la quantité est définie
if (isset($_POST['quantity'])) {
    // Ajoute le produit et la quantité au panier
    $_SESSION['cart'][] = [
        'name' => 'Paire de chaussures',
        'price' => 60,
        'quantity' => $_POST['quantity'][0]
    ];

    // Redirige vers la page panier
    header('Location: panier.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produit</title>
</head>
<body>
    <h1>Paire de chaussures</h1>
    <img src="chaussures.jpg" alt="Paire de chaussures">
    <p>Description du produit</p>
    <form method="POST">
        <label for="quantity">Quantité :</label>
        <input type="number" id="quantity" name="quantity[]" value="1">
        <button type="submit">Ajouter au panier</button>
    </form>
</body>
</html>
