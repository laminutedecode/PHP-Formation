<?php
$codeProduit = "A123";

switch ($codeProduit) {
  case "A123":
    echo "Le prix du produit A123 est 10€";
    break;
  case "B456":
    echo "Le prix du produit B456 est 20€";
    break;
  case "C789":
    echo "Le prix du produit C789 est 30€";
    break;
  default:
    echo "Code produit inconnu";
}

// On définit une variable $codeProduit qui contient le code du produit à chercher.
// On utilise une structure de contrôle switch qui va exécuter des instructions différentes en fonction de la valeur de la variable $codeProduit.
// Dans chaque case, on vérifie si la valeur de $codeProduit correspond à un code produit connu.
// Si c'est le cas, on affiche le prix correspondant à ce produit à l'aide de la fonction echo.
// On utilise l'instruction break pour sortir de la structure de contrôle switch une fois qu'on a trouvé le code produit correspondant.
// Si aucun des codes produits connus ne correspond à la valeur de $codeProduit, on affiche un message indiquant que le code produit est inconnu. On utilise le default pour cette condition.
?>
