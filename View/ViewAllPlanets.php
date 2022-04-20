<?php 
    require('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Toutes les planètes<?php 
                    if(!empty($_GET['type'])){
                        echo getTypes();
                    }
 ?></title>
</head>
<body class="container">
    
<h3 class="mt-3">Toutes les planètes<?php 
if(!empty($_GET['type'])){
    echo getTypes();
}
 ?></h3>
<div class="row">
    <a href="index.php" class="btn btn-dark mt-2 mx-2 col-2"><i class="fa-solid fa-circle-arrow-left"></i> Retour à l'accueil</a>
    <a href="?page=planet&action=insert" class="mt-2 col-2 btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Insert</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th colspan="2"><strong>Planet</strong></th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach ($planetsList as $id => $PlanetObject) : ?>
            <td class="mt-2 row"><p><strong><?=$PlanetObject->getNom()?></strong></p>
            <a href="?page=planet&id=<?=$PlanetObject->getId()?>" class="btn btn-success col-1 m-1"><i class="fa-solid fa-book-open-reader"></i></a>
            <a href="?page=planet&action=modify&id=<?=$PlanetObject->getId()?>" class="btn btn-primary col-1 m-1"><i class="fa-solid fa-pen"></i></a>
            <a href="?page=planet&action=delete&id=<?=$PlanetObject->getId()?>" class="btn btn-danger col-1 m-1"><i class="fa-solid fa-trash-can"></i></a>
        </td>
        <?php endforeach; ?>
        </tr>
    </tbody>
</table>

        </div>




    
</body>
</html>