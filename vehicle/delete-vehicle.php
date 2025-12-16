<?php
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';

if (isset($_GET['vehicleId'])) {
    $id = $_GET['vehicleId'];
    $result = deleteVehicle($pdo, $id);
    if ($result) {
        header('Location: ' . WEB_ROOT . '/vehicle/list-vehicle.php');
    }
}
?>