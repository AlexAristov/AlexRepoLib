<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 18:44
 */

class Controller{

    public $model;
    public $view;
    
    function __construct(){
        $this->view = new View();
    }

    function actionIndex(){

    }
}