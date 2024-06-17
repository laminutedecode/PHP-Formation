<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- En PHP, les conditions sont utilisées pour exécuter du code en fonction de certaines conditions. La structure de base d'une condition est la suivante : -->

<?php 
if (condition) {
  // code à exécuter si la condition est vraie
}

?>

<!-- La condition est une expression qui est évaluée comme étant vraie ou fausse. Si la condition est vraie, le code à l'intérieur des accolades est exécuté. Sinon, le code est ignoré.

Voici quelques exemples de conditions en PHP : -->

<?php 
$age = 18;

if ($age >= 18) {
  echo "Vous êtes majeur.";
}
?>

<!-- Dans cet exemple, la variable $age est initialisée à 18. La condition vérifie si l'âge est supérieur ou égal à 18. Comme c'est le cas, le message "Vous êtes majeur." est affiché.

Exemple 2 : -->

<?php 
$note = 12;

if ($note >= 10) {
  echo "Vous avez réussi l'examen.";
} else {
  echo "Vous avez échoué l'examen.";
}

?>


<!-- Dans cet exemple, la variable $note est initialisée à 12. La condition vérifie si la note est supérieure ou égale à 10. Comme c'est le cas, le message "Vous avez réussi l'examen." est affiché. Si la note avait été inférieure à 10, le message "Vous avez échoué l'examen." aurait été affiché à la place.

Exemple 3 : -->

<?php 
$jour = "samedi";

if ($jour == "samedi" || $jour == "dimanche") {
  echo "C'est le week-end !";
} else {
  echo "Ce n'est pas le week-end.";
}


?>


<!-- Dans cet exemple, la variable $jour est initialisée à "samedi". La condition vérifie si le jour est égal à "samedi" OU à "dimanche". Comme c'est le cas, le message "C'est le week-end !" est affiché. Si le jour avait été un jour de la semaine, le message "Ce n'est pas le week-end." aurait été affiché à la place.

En plus de la structure if, il existe également des structures de conditions alternatives, telles que else et elseif. Ces structures permettent d'exécuter du code en fonction de plusieurs conditions différentes. -->

</body>
</html>