<?php
include 'functions.php';
require 'connexiondb.php';

?>

<a href="./vehicle/list-vehicle.php">Liste des véhicules</a>
<a href="./driver/list-driver.php">Liste des chauffeurs</a>

<p>Nombre de véhicules : <?= getNBLineTable($pdo, 'vehicule'); ?></p>
<p>Nombre de chauffeurs : <?= getNBLineTable($pdo, 'conducteur'); ?></p>