<?php

namespace App\Core;

use \App\Services\{Router, Auth, DB};
use \App\Core\{Page};



class Routes
{
    public static function init()
    {
        Router::get('/', 'MainController@i');
        Router::get('/login', 'LoginController@i');
        Router::get('/photo/$id', 'PhotoController@i');
        Router::post('/api/login', 'ApiController@login');
       



        if (Auth::userid() > 0) {

        } else {
            //Router::redirect('/login?return='.$_SERVER['HTTP_REFERER']);
        }
    }
}
