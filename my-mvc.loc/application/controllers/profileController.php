<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 18:38
 */

class profileController extends Controller{
    
    function __construct(){
        $this->model = new Profile();
        $this->view = new View();
    }

    function actionIndex(){
        $data = $this->model->getData();
        
        $this->view->render('profile.php', [
            'profiles' => $data
        ]);
    }
    
}