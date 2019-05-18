<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 18:44
 */

class View {
    
    function render($contentView, $data = null){

        if (is_array($data)){
            extract($data);
        }

        require_once 'application/views/template.php';
    }
    
}