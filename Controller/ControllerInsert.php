<?php
declare(strict_types=1);
require('Models/ManagerPlanets.php');
include('View/ViewInsert.php');

if (!empty($_POST)){

        try{
            $planetHydrate = new Planets();
            $planetHydrate->hydrate();
            $myPlanet = ManagerPlanets::insert($planetHydrate);
            include('View/ViewSuccess.php');
            //En cas d'erreur
        } catch(Exception $e){
            //Renvoi un message de PDOException
            include('View/ViewMessage.php');  
        }

    
        
}