<?php

class Route 
{
	private $routes;         
	private $https = false; 

	public function initApp()
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}
	
	private function initRoutes()
	{	
		$array_routes['/estrutura-mvc/home'] = array(         // Route
			"controller" => "App\controllers\ControllerHome", // Controller 
			"action"     => "index"                           // Function 
		);

		$this->routes = $array_routes;
	}

	/**
	* Identifies which controller to respond to url
	* @param $url
	*/
	private function run($url)
	{	
		if(!empty($this->routes[$url])){
			$Controller = new $this->routes[$url]['controller'];
			$action     = $this->routes[$url]['action'];
			$Controller->$action();
		}
		else{
			echo 'ERROR 404 - Page not found';
		}
	}

	/**
	* Get url.
	* @return String url.
	*/
	private function getUrl()
	{
		if($this->https){
			if (isset($_SERVER['HTTPS'])) {
				return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			}
			else{
				header('location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
			}
		}else{
			if (isset($_SERVER['HTTPS'])){
				header('location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
			}
			else{
				return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			}
		}
	}
}
