<?php 

session_start();

use App\Core\App as App;
use App\Core\Controller as Controller;

//Autoload
require __DIR__.'/../vendor/autoload.php';

// Root path for inclusion.
define('INC_ROOT', dirname(__DIR__));



function url($url=null) {
    $link = 'http://'.$_SERVER['HTTP_HOST'].
        str_replace(
            $_SERVER['DOCUMENT_ROOT'],
            '',
            str_replace('\\', '/', INC_ROOT).'/public'
        );
    return $link.'/'.$url;
}


function asset($url) 
{
    $link = 'http://'.$_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', INC_ROOT).'/public'
    );
    return $link.'/'.$url;  
}


function str_limit($str,$limit)
{
    if (strlen($str) > $limit){
        $data = substr($str, 0, $limit) . '...';
    }

    return $data;
}

$app = new App;



