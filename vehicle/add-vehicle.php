<?php

include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    
    // traitement du formulaire
    $marque = clean($_POST['marque']);
    $modele = clean($_POST['modele']);
    $couleur = clean($_POST['couleur']);
    $immatriculation = clean($_POST['immatriculation']);
    
    addVehicle($pdo, $marque, $modele, $couleur, $immatriculation);

    $vehicle = getLastInsertId($pdo);
header('Location: ' . WEB_ROOT . '/vehicle/list-vehicle.php');
exit();

}


include PATH_PROJET . '/views/vehicle/add-vehicle-view.php';
?>
