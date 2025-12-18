<?php

include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    // traitement du formulaire
    $nom = clean($_POST['nom']);
    $prenom = clean($_POST['prenom']);

    addDriver($pdo, $nom, $prenom);
    header('Location: ' . WEB_ROOT . '/driver/list-driver.php');
    exit();
}


include PATH_PROJET . '/views/driver/add-driver-view.php';
?>