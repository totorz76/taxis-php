<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/solar/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <h1>Liste des véhicules</h1>
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
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-info">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>