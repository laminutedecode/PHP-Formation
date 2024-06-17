<!-- 
En PHP, while et do/while sont des structures de boucle qui permettent d'exécuter un bloc d'instructions tant qu'une condition est vraie.

La structure while est la plus simple des deux. Elle teste la condition au début de la boucle et n'exécute le bloc d'instructions que si la condition est vraie. Voici sa syntaxe : -->

<!--
while (condition) {
  // instructions à exécuter tant que la condition est vraie
}


-->


<?php
$compteur = 1;

while ($compteur <= 10) {
  echo $compteur."<br>";
  $compteur++;
}


?>

<!-- Dans cet exemple, le compteur est initialisé à 1 et la boucle est exécutée tant que $compteur est inférieur ou égal à 10. Le compteur est incrémenté à chaque tour de boucle, et le nombre est affiché à chaque itération.

La structure do/while est similaire à while, mais elle teste la condition à la fin de la boucle, ce qui signifie que le bloc d'instructions est exécuté au moins une fois, même si la condition est fausse dès le départ. Voici sa syntaxe :-->


<!-- do {
  // instructions à exécuter au moins une fois
} while (condition); -->

<?php
$compteur = 1;

do {
  echo $compteur."<br>";
  $compteur++;
} while ($compteur <= 10);



?>

<!-- Dans cet exemple, le compteur est initialisé à 1 et la boucle est exécutée tant que $compteur est inférieur ou égal à 10. Le compteur est incrémenté à chaque tour de boucle, et le nombre est affiché à chaque itération. Comme la condition est vérifiée à la fin de la boucle, le nombre 1 est affiché même si la condition est fausse dès le départ.

En résumé, la structure while teste la condition au début de la boucle et n'exécute le bloc d'instructions que si la condition est vraie, tandis que la structure do/while teste la condition à la fin de la boucle et exécute le bloc d'instructions au moins une fois, même si la condition est fausse dès le départ. -->