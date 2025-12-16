<?php 

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/taxi-php");
define("WEB_ROOT", "/taxi-php");

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


function deleteVehicle($pdo, $id){
    $stm = $pdo->prepare("DELETE FROM vehicule WHERE id_vehicule = :id_vehicule");
    $stm->bindParam(':id_vehicule', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}

function clean ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

