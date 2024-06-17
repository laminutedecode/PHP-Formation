<!-- En PHP, il est possible de déclarer une fonction avec un paramètre par défaut, ce qui permet à la fonction d'être appelée sans que tous les paramètres soient passés. Voici un exemple : -->


<?php
// Déclaration d'une fonction avec un paramètre par défaut
function afficherMessage($message = "Bonjour") {
    echo $message;
}

// Appel de la fonction sans argument
afficherMessage(); // affiche "Bonjour"

// Appel de la fonction avec un argument
afficherMessage("Salut"); // affiche "Salut"
?>


<!-- Dans cet exemple, nous avons déclaré une fonction nommée afficherMessage avec un paramètre $message par défaut égal à "Bonjour". Cela signifie que si la fonction est appelée sans paramètre, la valeur "Bonjour" sera utilisée.

Nous avons ensuite appelé la fonction deux fois : une fois sans argument, ce qui a affiché "Bonjour", et une deuxième fois avec l'argument "Salut", ce qui a affiché "Salut".

Il est important de noter que les paramètres par défaut doivent être les derniers paramètres de la fonction. De plus, les paramètres par défaut peuvent être de n'importe quel type, y compris des tableaux, des objets, etc. -->