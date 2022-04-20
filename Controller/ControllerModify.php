<?php
declare(strict_types=1);
require('Models/ManagerPlanets.php');
$myPlanet = ManagerPlanets::getOneById();
include('View/ViewModify.php');

if (!empty($_POST)){

    try{
        $planetHydrate = new Planets();
        $planetHydrate->hydrate();
        $myPlanet = ManagerPlanets::modify($planetHydrate);
        include('View/ViewSuccess.php');
        //En cas d'erreur
    } catch(Exception $e){
        include('View/ViewMessage.php');



    }


    
}