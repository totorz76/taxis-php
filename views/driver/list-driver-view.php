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
        if (count($driverArray) === 0) :
            echo '<h3>Aucun chauffeur enregistré</h3>';
            echo '<a href="'.WEB_ROOT.'/driver/add-driver.php" class="btn btn-secondary mb-3">Ajouter un conducteur</a>';
            die();
        endif;

        ?>
        <h1 class="text-primary">Liste des conducteurs</h1>
        <a href="<?= WEB_ROOT . './driver/add-driver.php' ?>" class="btn btn-secondary mb-3">Ajouter un conducteur</a>
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($driverArray as $driver) : ?>
                    <tr>
                        <td class="table-secondary"><?= $driver['nom'] ?></td>
                        <td class="table-secondary"><?= $driver['prenom'] ?></td>
                        <td class="table-secondary">
                            <a href="<?= WEB_ROOT ?>/driver/edit-driver.php?driverId=<?= $driver['id_conducteur'] ?>" class="btn btn-info">Edit</a>
                            <a href="<?= WEB_ROOT ?>/driver/delete-driver.php?driverId=<?= $driver['id_conducteur'] ?>" class="btn btn-info" onclick="return confirm('Etes-vous sur de vouloir supprimer ce conducteur ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>