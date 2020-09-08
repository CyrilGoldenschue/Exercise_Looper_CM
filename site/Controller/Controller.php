<?php
/**
 * Created by PhpStorm.
 * User: Cyril.GOLDENSCHUE
 * Date: 01/09/2020
 * Time: 11:36
 */
//appel du fichier model.php pour pouvoir avoir accès au fonction dans le fichier
require "Model/Model.php";
/**
 * @Description Permet d'accéder à l'accueil
 */

function homePage(){
    require 'View/View_Reception.php';
}

function takeExercise(){

    require 'View/takeExercise.php';
}

function manageExercise(){
    require 'View/manageExercise.php';
}

//It could be useful to use that 'cause we can manage a lot of line and time.
//Discussion in progress.
function openNewPage($url){

    require 'View/' . $url . '.php';
}
/**
 * @Description Permet d'afficher la page d'erreur quand la page de destination n'existe pas
 */
function error(){
    //affichage de la page d'erreur
    require 'View/View_Error.php';
}