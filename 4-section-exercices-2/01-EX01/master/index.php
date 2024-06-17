<!-- Une fonction sans argument est une fonction qui ne prend aucun paramètre lorsqu'elle est appelée. Voici un exemple de déclaration et d'utilisation d'une fonction sans argument en PHP : -->


<?php
function afficherFormulaireContact() {
    echo '<form action="" method="post">';
    echo '<label for="nom">Nom :</label>';
    echo '<input type="text" id="nom" name="nom" required><br>';
    echo '<label for="email">Email :</label>';
    echo '<input type="email" id="email" name="email" required><br>';
    echo '<label for="sujet">Sujet :</label>';
    echo '<input type="text" id="sujet" name="sujet" required><br>';
    echo '<label for="message">Message :</label>';
    echo '<textarea id="message" name="message" required></textarea><br>';
    echo '<input type="submit" value="Envoyer">';
    echo '</form>';
}
afficherFormulaireContact()
?>



<!-- Cette fonction crée un formulaire de contact avec quatre champs : nom, email, sujet et message. Les champs nom, email, sujet et message sont définis avec les balises HTML <input> et <textarea>, avec des attributs requis pour s'assurer que l'utilisateur entre des informations dans chaque champ.

Ensuite, la fonction crée un bouton d'envoi pour soumettre le formulaire en utilisant l'attribut type="submit" de la balise <input>. Le formulaire utilise la méthode POST pour envoyer les données et l'attribut action="" pour spécifier que les données doivent être traitées par la même page. -->