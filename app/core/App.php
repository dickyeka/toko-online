<?php

namespace App\Core;

class App
{
	protected  $controller = "home";
	
	protected  $method = "index";

	protected $params = [];

	function __construct($foo = null) {
		$url = $this->parseUrl();

		if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . ucfirst($this->controller) . '.php';
        
        $this->controller = new $this->controller();

       	if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

	}

	public function parseUrl() {
		if (isset($_GET['url'])){
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			return $url;
		}
	}


}