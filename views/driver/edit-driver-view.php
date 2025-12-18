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
        <h1 class="text-primary">Editer un chauffeur</h1>
        <form action="?driverId=<?= $driver['id_conducteur']; ?>" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= $driver['nom']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $driver['prenom']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="envoyer">Ajouter</button>
        </form>
    </main>
</body>
</html>