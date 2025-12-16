<?php
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';

if (isset($_GET['vehicleId'])) {
    $vehicleId = $_GET['vehicleId'];
    $sql = "DELETE FROM vehicule WHERE id_vehicule = :id_vehicule";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_vehicule', $vehicleId);
    $stmt->execute();
    header('Location: list-vehicle.php');
}
?>