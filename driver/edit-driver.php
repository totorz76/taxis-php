<?php
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';

$idEditDriver = $_GET['driverId'] ?? null;

if(!is_numeric($idEditDriver)){
    dd("ID non numérique");
}
$driver = getDriver($pdo, $idEditDriver);
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])){
    $nom = clean($_POST['nom']);
    $prenom = clean($_POST['prenom']);
    updateDriver($pdo, $idEditDriver, $nom, $prenom);
    header('Location: ' . WEB_ROOT . '/driver/list-driver.php');
    exit();
}

include PATH_PROJET . '/views/driver/edit-driver-view.php';
?>