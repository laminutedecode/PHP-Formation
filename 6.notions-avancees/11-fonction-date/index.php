<!-- En PHP, la fonction date() est utilisée pour formater la date et l'heure actuelles en fonction d'un format spécifié.

La fonction date() prend deux paramètres obligatoires : le format de date et l'heure souhaité, et un paramètre facultatif pour spécifier le temps à formatter en tant que timestamp Unix. Si aucun paramètre de temps n'est spécifié, la fonction date() utilise l'heure actuelle du serveur.

Le format de la date et de l'heure est spécifié en utilisant des lettres spéciales appelées "caractères de formatage". Par exemple, le caractère "d" représente le jour du mois sous forme de nombre à deux chiffres (par exemple, "01" pour le 1er jour du mois) et le caractère "Y" représente l'année sur quatre chiffres (par exemple, "2023").

Voici un exemple simple d'utilisation de la fonction date() pour afficher la date et l'heure actuelles dans un format personnalisé : -->
<?php
$current_time = time(); // obtenir le timestamp Unix de l'heure actuelle
$formatted_time = date("Y-m-d H:i:s", $current_time); // formater la date et l'heure dans le format "année-mois-jour heure:minute:seconde"
echo $formatted_time; // afficher la date et l'heure formatées

// Ce code affichera quelque chose comme "2023-04-15 14:30:00", qui est la date et l'heure actuelles au moment de l'exécution du code, formatées dans le format spécifié.

// Il existe de nombreux autres caractères de formatage que vous pouvez utiliser pour personnaliser l'apparence de la date et de l'heure formatées. Vous pouvez trouver une liste complète de ces caractères et de leur signification dans la documentation PHP.

?>