<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 18:38
 */

class MainController extends Controller{
    
    function actionIndex(){
        $this->view->render('main.php', 0);
    }
    
}