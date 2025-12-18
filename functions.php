<?php

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/taxi-php");
define("WEB_ROOT", "/taxi-php");

function dg($data)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
};

function dd($data)
{
    echo '<pre style="background-color: #000; color: #fff; padding: 10px">';
    var_dump($data);
    echo '</pre>';
    die();
};

function listerVehicles($pdo)
{
    $sql = "SELECT * FROM vehicule";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $vehicles = $stmt->fetchAll();
    return $vehicles;
}

function listerDrivers($pdo)
{
    $sql = "SELECT * FROM conducteur";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $drivers = $stmt->fetchAll();
    return $drivers;
}

function deleteVehicle($pdo, $id)
{
    $stm = $pdo->prepare("DELETE FROM vehicule WHERE id_vehicule = :id");
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}
function deleteDriver($pdo, $id)
{
    $stm = $pdo->prepare("DELETE FROM conducteur WHERE id_conducteur = :id");
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}

function clean($dataParam)
{
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function getVehicle($pdo, $id)
{
    $sql = "SELECT * FROM vehicule WHERE id_vehicule = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $vehicle = $stmt->fetch();
    return $vehicle;
}
function getDriver($pdo, $id)
{
    $sql = "SELECT * FROM conducteur WHERE id_conducteur = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $driver = $stmt->fetch();
    return $driver;
}

function getLastInsertId($pdo)
{
    $sql = "SELECT LAST_INSERT_ID()";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $last_insert_id = $stmt->fetch();
    return $last_insert_id;
}

function addVehicle($pdo, $marque, $modele, $couleur, $immatriculation)
{
    $sql = "INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES (:marque, :modele, :couleur, :immatriculation)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'marque' => $marque,
        'modele' => $modele,
        'couleur' => $couleur,
        'immatriculation' => $immatriculation
    ]);
}
function addDriver($pdo, $nom, $prenom)
{
    $sql = "INSERT INTO conducteur (nom, prenom) VALUES (:nom, :prenom)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'nom' => $nom,
        'prenom' => $prenom
    ]);
}

function updateVehicle($pdo, $id, $marque, $modele, $couleur, $immatriculation)
{
    $sql = "UPDATE vehicule SET marque = :marque, modele = :modele, couleur = :couleur, immatriculation = :immatriculation WHERE id_vehicule = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
        'marque' => $marque,
        'modele' => $modele,
        'couleur' => $couleur,
        'immatriculation' => $immatriculation
    ]);
}
function updateDriver($pdo, $id, $nom, $prenom)
{
    $sql = "UPDATE conducteur SET nom = :nom, prenom = :prenom WHERE id_conducteur = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom
    ]);
}

function getNBLineTable($pdo, $table)
{
    $sql = "SELECT COUNT(*) as nb FROM `" . $table . "`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}
