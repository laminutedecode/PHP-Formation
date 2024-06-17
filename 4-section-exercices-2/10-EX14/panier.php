<?php
session_start();

// Initialise le total et le contenu du panier
$total = 0;
$content = '';

// Vérifie si le panier est défini
if (isset($_SESSION['cart'])) {
    // Parcourt tous les produits dans le panier
    foreach ($_SESSION['cart'] as $key => $item) {
        // Calcule le sous-total pour chaque produit en utilisant la quantité actuelle
        $subtotal = $item['price'] * $item['quantity'];

        // Met à jour la quantité du produit dans le panier si la nouvelle quantité est définie
        if (isset($_POST['quantity'][$key])) {
            $_SESSION['cart'][$key]['quantity'] = $_POST['quantity'][$key];
        }

        // Ajoute le nom du produit, la quantité, le prix et le sous-total au contenu du panier
        $content .= '<form method="POST"><p>' . $item['name'] . ' (' . $item['price'] . '€) : <input type="number" name="quantity[]" value="' . $item['quantity'] . '"> x ' . $item['price'] . '€ = ' . $subtotal . '€ <button type="submit">Modifier</button></p></form>';

        // Ajoute le sous-total au total
        $total += $subtotal;
    }
}

// Affiche le contenu du panier et le total
echo '<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
</head>
<body>
    <h1>Panier</h1>
    ' . $content . '
    <p>Total : ' . $total . '€</p>
</body>
</html>';
