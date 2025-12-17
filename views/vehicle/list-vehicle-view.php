<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/solar/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <?php
        if (count($vehicleArray) === 0) :
            echo '<h3>Aucun véhicule enregistré</h3>';
            echo '<a href="'.WEB_ROOT.'/vehicle/add-vehicle.php" class="btn btn-secondary">Ajouter un véhicule</a>';
            die();
        endif;

        ?>
        <h1>Liste des véhicules</h1>
        <a href="<?= WEB_ROOT . './vehicle/add-vehicle.php' ?>" class="btn btn-secondary">Ajouter un véhicule</a>
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Couleur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicleArray as $vehicle) : ?>
                    <tr>
                        <td class="table-secondary"><?= $vehicle['marque'] ?></td>
                        <td class="table-secondary"><?= $vehicle['modele'] ?></td>
                        <td class="table-secondary"><?= $vehicle['couleur'] ?></td>
                        <td class="table-secondary">
                            <a href="<?= WEB_ROOT ?>/vehicle/edit-vehicle.php?vehicleId=<?= $vehicle['id_vehicule'] ?>" class="btn btn-info">Edit</a>
                            <a href="<?= WEB_ROOT ?>/vehicle/delete-vehicle.php?vehicleId=<?= $vehicle['id_vehicule'] ?>" class="btn btn-info" onclick="return confirm('Etes-vous sur de vouloir supprimer ce véhicule ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

</body>

</html>