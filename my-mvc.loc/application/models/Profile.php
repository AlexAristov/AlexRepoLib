<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01.09.2016
 * Time: 20:41
 */

class Profile extends Model{
    function getData(){
        return [
            [
                'key' => 'RU',
                'country' => 'Russia',
                'count' => '1000000'
            ],
            [
                'key' => 'US',
                'country' => 'England',
                'count' => '32543543'
            ],
            [
                'key' => 'FR',
                'country' => 'France',
                'count' => '76843'
            ],
        ];
    }

}