<?php 
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';


$vehicleArray = listerVehicles($pdo);

include $_SERVER['DOCUMENT_ROOT'] . 'php-taxis/views/vehicle/list-vehicle-view.php';
?>