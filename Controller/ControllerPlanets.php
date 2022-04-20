<?php
declare(strict_types=1);
require('Models/ManagerPlanets.php');

if(!empty($_GET['page']) && $_GET['page'] == 'planet' || !empty($_GET['action']) && $_GET['action'] == 'insert'){
    if (!empty($_GET['id']) && $myPlanet = ManagerPlanets::getOneById() ){
        include('View/ViewOnePlanet.php');
    } elseif(!empty($_GET['type'])){
        if($planetsList = ManagerPlanets::getAllByType()){
            include('View/ViewAllPlanets.php');
        }else{
            include('View/View404.php'); 
        }
    
    } elseif(empty($_GET['id']) && empty($_GET['name'])){
        $planetsList = ManagerPlanets::getAll();
        require('View/ViewAllPlanets.php');
    } else {
        include('View/View404.php');
    }
} elseif(!empty($_GET['nom'])){
    if($myPlanet = ManagerPlanets::getOneByName()){
        include('View/ViewOnePlanet.php');
    }else{
        include('View/View404.php'); 
    }

} else {
    include('View/View404.php');
}
