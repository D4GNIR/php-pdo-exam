<?php
declare(strict_types=1);

// require('connexion-bdd.php');

// echo $db->exec(
//     "CREATE TABLE examen_pdo
//     (
//         id INT(11) NOT NULL AUTO_INCREMENT,
//         nom VARCHAR(7) NOT NULL,
//         type VARCHAR(10) NOT NULL,
//         diametre MEDIUMINT(9) NOT NULL,
//         gravite FLOAT(9) NOT NULL,
//         lien_nasa VARCHAR(180) NOT NULL,
//         PRIMARY KEY(id)
    
//     )"
//     );
    
if (isset($_GET['page']) ) {
    if ($_GET['page'] == 'planet' && !isset($_GET['action'])) {
        include('Controller/ControllerPlanets.php');
    }else if (isset($_GET['action'])) {
        if($_GET['action'] == 'insert'){
            require('controller/ControllerInsert.php');
        }elseif($_GET['action'] == 'delete'){
            include('Controller/ControllerDelete.php');
        }elseif($_GET['action'] == 'modify'){
            include('Controller/ControllerModify.php');
        }else{
            include('View/View404.php');
        }        
    }else{
        include('View/View404.php');
    }
}elseif(isset($_GET['nom'])){
    if (!empty($_GET['nom'])) {
        include('Controller/ControllerPlanets.php');
    }
}elseif(isset($_GET['type'])){
    if (!empty($_GET['type'])) {
        include('Controller/ControllerPlanets.php');
    }
}else{
    include('Controller/ControllerAccueil.php');
}
   ?> 
