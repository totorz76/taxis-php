<?php 
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';

$driverArray = listerDrivers($pdo);
include PATH_PROJET . '/views/driver/list-driver-view.php';
?>