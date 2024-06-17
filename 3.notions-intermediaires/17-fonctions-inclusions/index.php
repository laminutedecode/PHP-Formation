
<?php
//  En PHP, il existe trois méthodes pour inclure un fichier dans un script : include, require et require_once. Toutes ces méthodes permettent d'inclure le contenu d'un fichier dans un script PHP, mais elles diffèrent légèrement en termes de gestion des erreurs et de la façon dont les fichiers sont inclus.

// Include
// La méthode include est utilisée pour inclure un fichier dans un script PHP. Si le fichier inclus n'existe pas, une erreur E_WARNING sera émise, mais le script continuera d'être exécuté.

include 'test.php';


// Require
// La méthode require est similaire à include, mais elle est plus stricte. Si le fichier inclus n'existe pas, une erreur fatale sera déclenchée et le script s'arrêtera.

require 'test.php';


// Require_once
// La méthode require_once est similaire à require, mais elle s'assure que le fichier est inclus une seule fois dans le script. Si le fichier a déjà été inclus, il ne sera pas inclus à nouveau.
require_once 'test.php';


// Dans les trois cas, le fichier inclus peut être un fichier PHP ou un autre type de fichier, comme un fichier texte ou une image. Les méthodes d'inclusion peuvent être utiles pour inclure du code réutilisable dans un script, tel que des fonctions ou des classes.

// En général, il est recommandé d'utiliser require ou require_once plutôt que include pour s'assurer que les erreurs sont gérées correctement et que le script ne continue pas à s'exécuter en cas d'erreur fatale.
?>
