<?php
include 'functions.php';
require 'connexiondb.php';

?>

<a href="./vehicle/list-vehicle.php">Liste des véhicules</a>

<p>Nombre de véhicules : <?= getNBLineTable($pdo, 'vehicule'); ?></p>