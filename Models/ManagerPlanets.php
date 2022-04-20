<?php
require_once('connexion-bdd.php');
require_once('Models/Planets.php');


class ManagerPlanets{
    public static function getOneById(){
        $preparedQuery = $GLOBALS['db']->prepare("SELECT * FROM `examen_pdo` where id=?");
        $preparedQuery->execute(array($_GET['id']));
        // Pour debug
        // $monument = $preparedQuery->fetchObject('Planets');
        // echo '<pre>';
        //     print_r($monument);
        // echo '</pre>';
        return $preparedQuery->fetchObject('Planets');
        
    }
    public static function getOneByName(){
        $preparedQuery = $GLOBALS['db']->prepare("SELECT * FROM `examen_pdo` where nom=?");
        $preparedQuery->execute(array($_GET['nom']));
        return $preparedQuery->fetchObject('Planets');
        
    }

    public static function getAllByType(){
        $preparedQuery = $GLOBALS['db']->prepare("SELECT * FROM `examen_pdo` where type=?");
        $preparedQuery->execute(array($_GET['type']));
        return $preparedQuery->fetchAll(PDO::FETCH_CLASS,'Planets');
        
    }

    public static function getAll(){
        $query = $GLOBALS['db']->query('SELECT * FROM `examen_pdo`');
        return ($query->fetchAll(PDO::FETCH_CLASS,'Planets'));
    }

    public static function insert(Planets $elementHydrate){
        $preparedQuery = $GLOBALS['db']->prepare("INSERT INTO `examen_pdo`(`nom`, `type`, `diametre`, `gravite`, `lien_nasa`) VALUES (?,?,?,?,?)");
        $preparedQuery->execute(array($elementHydrate->getNom(),
                                    $elementHydrate->getType(),
                                    $elementHydrate->getDiametre(),
                                    $elementHydrate->getGravite(),
                                    $elementHydrate->getLien_nasa()));
        return $preparedQuery->fetchObject('Planets');
    }
    public static function delete(){
        $preparedQuery = $GLOBALS['db']->prepare("DELETE FROM `examen_pdo` WHERE id = ?");
        
        return $preparedQuery->execute([$_GET['id']]);
    }

    public static function modify(Planets $elementHydrate){
        $preparedQuery = $GLOBALS['db']->prepare("UPDATE `examen_pdo` SET `nom` = ?,`type` = ?, `diametre` = ?, `gravite` = ?, `lien_nasa` = ? WHERE `id` = ?");
        $preparedQuery->execute(array($elementHydrate->getNom(),
                                    $elementHydrate->getType(),
                                    $elementHydrate->getDiametre(),
                                    $elementHydrate->getGravite(),
                                    $elementHydrate->getLien_nasa(),
                                    $_GET['id']));
        return $preparedQuery->fetchObject('Planets');
    }
}

