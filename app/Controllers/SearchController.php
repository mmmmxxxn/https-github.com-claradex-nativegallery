<?php
namespace App\Controllers;

use \App\Services\{Router, Auth, DB, Json};
use \App\Controllers\ExceptionRegister;
use \App\Core\Page;

class SearchController extends NGController
{
    public static function i()
    {
       Page::set('Search/Index');
       
    }



}