<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body class="">
 

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <h1 class="mt-4 text-success">Accueil</h1>   
  <form class="d-flex" action="index.php">
    <input type="text" class="form-control me-2" name="nom" placeholder="Rechercher une planète">

    <input type="submit" class="btn btn-outline-success" value="Rechercher">
</form>
  </div>
</nav>
<div class="container">
<a href="?page=planet" class="m-4 btn btn-primary"><i class="fa-solid fa-circle"></i> Liste de toutes les planètes</a>
<a href="?page=planet&type=Tellurique" class="m-4 btn btn-success"><i class="fa-solid fa-globe"></i> Liste de toutes les planètes Telluriques</a>
<a href="?page=planet&type=Gazeuse" class="m-4 btn btn-dark"><i class="fa-solid fa-wind"></i> Liste de toutes les planètes Gazeuses</a>

</div>

</body>
</html>