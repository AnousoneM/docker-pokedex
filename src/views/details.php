<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <h1 class="text-center">POKEDEX</h1>
    <h2 class="text-center">Let's go Pikachu!</h2>

    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div class="card">
                <img src="<?= $pokemon['image'] ?>" class="card-img-top" alt="Pikachu">
                <div class="card-body">
                    <p class="card-title h3">Nom : <?= $pokemon['nom'] ?></p>
                    <p class="card-title h4">Type :
                        <?php foreach ($pokemon['type'] as $type) { ?>
                            <span class="badge rounded-pill bg-pill-<?= $type ?>"><?= $type ?></span>
                        <?php } ?>
                    </p>
                    <p class="card-title">Description : <?= $pokemon['description'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="/" class="btn btn-danger">Retour</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>