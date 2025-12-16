<?php 

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/taxi-php");

function dg($data){
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
};

function dd($data){
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
    die();
};

function listerVehicles($pdo){
    $sql = "SELECT * FROM vehicule";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $vehicles = $stmt->fetchAll();
    return $vehicles;
}

?>

