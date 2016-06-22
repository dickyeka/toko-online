<?php 

namespace App\Helper;


class Redirect 
{
	public function to($url)
	{
		$link = 'http://'.$_SERVER['HTTP_HOST'].
        str_replace(
            $_SERVER['DOCUMENT_ROOT'],
            '',
            str_replace('\\', '/', INC_ROOT).'/public'
        );

     
		header("Location:".$link.'/'.$url);
		die();
	}
}