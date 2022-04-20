<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> <?= $myPlanet->getNom()?> </title>
</head>

<body class="container">
<a href="index.php" class="btn btn-dark mt-3"><i class="fa-solid fa-circle-arrow-left"></i> Retour à l'accueil</a>
<a href="?page=planet" class="btn btn-warning mt-3"><i class="fa-solid fa-circle-arrow-left"></i> Retour à la liste des planètes</a>
    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title"><?= $myPlanet->getNom() ?></h3>
            <p class="card-text">Type : <?= $myPlanet->getType() ?> </p>
            <p class="card-text">Diamètre : <?= $myPlanet->getDiametre() ?> </p>
            <p class="card-text">Gravité : <?= $myPlanet->getGravite() ?> </p>
            <p>Lien de la nasa : <a href="<?= $myPlanet->getLien_nasa() ?>" target="_blank" ><?= $myPlanet->getLien_nasa() ?></a> </p>
        </div>
    </div>
</body>

</html>