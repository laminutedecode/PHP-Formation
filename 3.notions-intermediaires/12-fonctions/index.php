<!-- Pour créer ses propres fonctions en PHP, voici les étapes à suivre :

Définir le nom de la fonction : le nom doit être unique et descriptif de ce que la fonction fait.

Définir les paramètres de la fonction : les paramètres sont les valeurs que la fonction prend en entrée. Vous pouvez en définir aucun ou plusieurs. Les paramètres sont séparés par des virgules et sont définis entre les parenthèses.

Écrire le code à exécuter : le code de la fonction est le bloc de code qui sera exécuté lorsque la fonction est appelée.

Retourner une valeur (optionnel) : si vous souhaitez que la fonction retourne une valeur, vous pouvez utiliser le mot-clé "return" suivi de la valeur à retourner.

Voici un exemple de fonction qui calcule la moyenne de deux nombres : -->

<?php
function calculerMoyenne($nombre1, $nombre2) {
	$moyenne = ($nombre1 + $nombre2) / 2;
	return $moyenne;
  }
  
?>

<!-- Dans cet exemple, la fonction s'appelle "calculerMoyenne" et prend deux paramètres : $nombre1 et $nombre2. Le code de la fonction calcule la moyenne de ces deux nombres et la retourne en utilisant le mot-clé "return".

Pour appeler la fonction, il suffit de l'appeler par son nom suivi des valeurs à passer en paramètre, comme ceci : -->

<?php
$resultat = calculerMoyenne(4, 6);
echo $resultat; // affiche 5

// Dans cet exemple, nous appelons la fonction "calculerMoyenne" avec les valeurs 4 et 6, stockons le résultat dans une variable "$resultat" et l'affichons à l'écran en utilisant la fonction "echo".

// Définition de la fonction qui utilise deux variables
function afficherSomme($a, $b) {
    $somme = $a + $b;
    echo "La somme de $a et $b est égale à $somme.";
}

// Utilisation de la fonction avec deux variables
$x = 3;
$y = 4;
afficherSomme($x, $y); // affiche "La somme de 3 et 4 est égale à 7."
?>




<!-- Dans cet exemple, nous avons défini une fonction nommée afficherSomme qui prend deux paramètres $a et $b. Dans la fonction, nous avons calculé la somme de $a et $b, puis affiché le résultat à l'utilisateur en utilisant l'instruction echo.

Ensuite, nous avons défini deux variables $x et $y et leur avons affecté les valeurs 3 et 4, respectivement. Nous avons ensuite appelé la fonction afficherSomme en lui passant les variables $x et $y comme paramètres. La fonction a été exécutée avec les valeurs de $x et $y, et le résultat a été affiché à l'utilisateur.

Il est important de noter que les variables $x et $y doivent être définies avant d'être passées en paramètres à la fonction. Vous pouvez également utiliser des variables déclarées à l'intérieur d'une fonction comme paramètres pour une autre fonction. -->
