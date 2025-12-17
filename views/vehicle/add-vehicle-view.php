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
        <h1>Ajouter un véhicule</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="marque" class="form-label">Marque</label>
                <input type="text" class="form-control" id="marque" name="marque" required>
            </div>
            <div class="mb-3">
                <label for="modele" class="form-label">Modèle</label>
                <input type="text" class="form-control" id="modele" name="modele" required>
            </div>
            <div class="mb-3">
                <label for="couleur" class="form-label">Couleur</label>
                <input type="text" class="form-control" id="couleur" name="couleur" required>
            </div>
            <div class="mb-3">
                <label for="immatriculation" class="form-label">Immatriculation</label>
                <input type="text" class="form-control" id="immatriculation" name="immatriculation" required>
            </div>
            <button type="submit" class="btn btn-primary" name="envoyer">Ajouter</button>
        </form>
    </main>
</body>
</html>