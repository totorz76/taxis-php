<?php

include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['envoyer'])) {
    
}
// traitement du formulaire
$marque = clean($_POST['marque']);
$modele = clean($_POST['modele']);
$couleur = clean($_POST['couleur']);
$immatriculation = clean($_POST['immatriculation']);

$sql = "INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['marque' => $marque,
    'modele' => $modele,
    'couleur' => $couleur,
    'immatriculation' => $immatriculation
]);
header('Location: ' . WEB_ROOT . '/vehicle/list-vehicle.php');
exit();

include PATH_PROJET . '/views/vehicle/add-vehicle-view.php';
?>
