<?php
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';

$idEditVehicle = $_GET['vehicleId'] ?? null;

if(!is_numeric($idEditVehicle)){
    dd("ID non numérique");
}
$vehicle = getVehicle($pdo, $idEditVehicle);
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])){
    $marque = clean($_POST['marque']);
    $modele = clean($_POST['modele']);
    $couleur = clean($_POST['couleur']);
    $immatriculation = clean($_POST['immatriculation']);
    updateVehicle($pdo, $idEditVehicle, $marque, $modele, $couleur, $immatriculation);
    header('Location: ' . WEB_ROOT . '/vehicle/list-vehicle.php');
    exit();
}

include PATH_PROJET . '/views/vehicle/edit-vehicle-view.php';
?>