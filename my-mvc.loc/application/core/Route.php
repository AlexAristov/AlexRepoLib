<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 18:16
 */

class Route {

    static function start(){
        $controller_name = 'main';
        $action_name = 'index';

        $route = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($route[1])){
            $controller_name = $route[1];
        }

        if (!empty($route[2])){
            $action_name = $route[2];
        }

        $action_name = 'action'.$action_name;
        $model_name = $controller_name;
        $controller_name = $controller_name.'Controller';

        $controller_file = $controller_name.'.php';
        $model_file = $model_name.'.php';

        $controller_path = 'application/controllers/'.$controller_file;
        $model_path = 'application/models/'.$model_file;


        if (file_exists($model_path)){
            require_once $model_path;
        }

        if (file_exists($controller_path)){
            require_once $controller_path;

            $controller = new $controller_name;
        }else{
            Route::errorPage404();
        }

        if (method_exists($controller, $action_name)){
            $controller->$action_name();
        }else{
            Route::errorPage404();
        }

    }

    static function errorPage404(){
        print_r('Not found page');
    }

}