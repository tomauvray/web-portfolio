<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Tom AUVRAY</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/tech-stack.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/contact-form.css">
    <link rel="stylesheet" href="assets/css/projects.css">
    <link rel="icon" href="assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@600&family=Outfit:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <script defer src="assets/js/app.js"></script>
</head>
<body>

<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'formulaire/contact-formulaire-mail.php'; /* formulaire/contact-formulaire-yaml.php pour envoie du formulaire sur le fichier YAML */
    }
?>

<header>
<?php require('assets/php/header.php');?>
</header>

<main>
<?php require('assets/php/about.php');?>
<?php require('assets/php/competences.php');?>
<?php require('assets/php/formations.php');?>
<?php require('assets/php/experiences.php');?>
<?php require('assets/php/passions.php');?>
<?php require('assets/php/contact.php');?>
</main>

<footer>
<?php require('assets/php/footer.php');?>
</footer>

</body>
</html>