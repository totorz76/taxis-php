<?php
include dirname(__DIR__) . '/functions.php';
require dirname(__DIR__) . '/connexiondb.php';

if (isset($_GET['driverId'])) {
    $id = $_GET['driverId'];
    $result = deleteDriver($pdo, $id);
    if ($result) {
        header('Location: ' . WEB_ROOT . '/driver/list-driver.php');
    }
}
?>