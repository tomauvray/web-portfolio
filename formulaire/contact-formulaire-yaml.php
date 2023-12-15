<?php

require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messageContent = $_POST["message"];

    $formData = [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $messageContent
    ];

// Charger les données actuelles du fichier YAML
    $existingData = [];
    if (file_exists('assets/yaml/data.yaml')) {
        $existingData = Yaml::parseFile('assets/yaml/data.yaml');
    }

// Ajouter les nouvelles données aux données existantes
    $allFormData = array_merge($existingData, [$formData]);

// Convertir les données en format YAML
    $yamlData = Yaml::dump($allFormData);

// Sauvegarder les données dans un fichier YAML
    if (file_put_contents('assets/yaml/data.yaml', $yamlData) !== false) {
        $_SESSION['submissionResult'] = 'Données du formulaire soumises avec succès';
    } else {
        $_SESSION['submissionResult'] = 'Échec de l\'enregistrement des données dans le fichier YAML';
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

?>