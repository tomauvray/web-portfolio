<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messageContent = $_POST["message"];


    $message = "Nom de l'expéditeur: $name\n";
    $message .= "Adresse de courriel: $email\n";
    $message .= "Objet du message: $subject\n";
    $message .= "Contenu du message:\n$messageContent";

// Adresse e-mail de destination
    $to = "tom.auvray@sts-sio-caen.info"; 

// En-têtes pour l'e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envoi du mail
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        $_SESSION['submissionResult'] = 'Le formulaire a été envoyé par e-mail avec succès.';
    } else {
        $_SESSION['submissionResult'] = 'Erreur lors de l\'envoi du formulaire par e-mail.';
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>
