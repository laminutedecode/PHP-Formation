<?php




if(isset($_POST['submit'])){
    if((empty($_POST['nom'])) || (empty($_POST['prenom']))  || ( empty($_POST['email']))  || ( empty($_POST['message'])) ) {
        echo "<p class='infos'>Veuillez remplir les champs</p>";
    }else {

//         La fonction mail() en PHP est une fonction intégrée qui permet l'envoi d'e-mails à partir d'un script PHP. Elle prend plusieurs paramètres qui définissent le destinataire, le sujet, le contenu et les en-têtes de l'e-mail.

// Voici les paramètres de base de la fonction mail():

// Destinataire: l'adresse e-mail du destinataire. Il peut être unique ou multiple en utilisant une liste séparée par des virgules.
// Sujet: le sujet de l'e-mail.
// Message: le corps du message de l'e-mail.
// En-têtes: Les en-têtes de l'e-mail, qui peuvent inclure des informations telles que le champ "From" (expéditeur) ou des en-têtes personnalisés.

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

$destinataire = 'laminutedecode@gmail.com';
$sujet = 'Sujet de l\'e-mail';
// \n = retour à la ligne
// $contenu = "Vous avez recu un e-mail depuis votre site.\n";
// $contenu .= "Nom: $nom \n";
// $contenu .= "Prenom: $prenom \n";
// $contenu .= "E-mail: $email \n";
// $contenu .= "Message: $message\n";


// pour l'envoyer en html
$contenu ="<html><body><p>$nom</p><p>$prenom</p><p>$email</p><p>$message</p></body></html>";
$headers = "From: '.$destinataire \n" ;
$headers .= "Content-type:text/html; charset='UTF-8'";


mail($destinataire, $sujet, $contenu, $headers);


// la fonction mail() envoie un e-mail au destinataire spécifié avec un sujet et un message donnés. Les en-têtes sont également inclus pour définir l'expéditeur et le logiciel utilisé pour envoyer l'e-mail.

//         Il est important de noter que la fonction mail() dépend de la configuration du serveur pour l'envoi des e-mails et peut ne pas fonctionner correctement dans certaines situations, en particulier lorsque des mesures de sécurité sont en place pour éviter l'envoi de spam.

        echo "<p class='success'>Votre message à était envoyé avec succès</p>";

    }


    $captcha_response = $_POST['g-recaptcha-response'];
$secret_key = 'YOUR_SECRET_KEY';
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$captcha_response");
$response_data = json_decode($response);

if (!$response_data->success) {
    // Le captcha n'a pas été validé
    echo "<p class='infos'>Veuillez cocher la case de vérification captcha</p>";
} else {
    // Le captcha a été validé
    // Traiter le formulaire de contact comme avant
}

}