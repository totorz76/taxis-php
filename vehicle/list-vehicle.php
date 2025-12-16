<?php 
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';


$vehicleArray = listerVehicles($pdo);

include  PATH_PROJET . '/views/vehicle/list-vehicle-view.php';
?>