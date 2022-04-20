<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert</title>
</head>
<body class="">
 

<div class="container">
    <form method='post' class="mt-3" enctype="multipart/form-data">
        <div class="form-example">
            <label class='mt-3' for="nom">Nom de la planète: </label>
            <input type="text" name="nom" id="nom" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="type">Type de la planète: </label>
            <input type="text" name="type" id="type" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="diametre">Diamètre de la planète: </label>
            <input type="text" name="diametre" id="diametre" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="gravite">Gravité de la planète: </label>
            <input type="text" name="gravite" id="gravite" >
        </div>
        <div class="form-example">
            <label class='mt-3' for="lien_nasa">Lien de la Nasa: </label>
            <input type="text" name="lien_nasa" id="lien_nasa" >
        </div>
        <div class="row">
        <div class="form-example col-1">
            <input class="btn btn-success mt-3" type="submit" value="Envoyer">
        </div>
        <div class="col-1">
            <a class="btn btn-warning mt-3" href="?page=planet">Retour</a>
        </div>
    </div>
    </form>
</div>

</body>
</html>

