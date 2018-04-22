<?php

class Route 
{
	private $route;  // Variavel que receber todas as rotas possiveis do sistema.
	private $https = false;

	public function __construct()
	{
		$this->initRoute();
		$this->run($this->getUrl());
	}
	
	/**
	* Inicia todas as rotas possiveis do sistema.
	*/
	protected function initRoute()
	{	

		$array_routes['/mvc/home/'] = array( 
			"controller" => "ControllerSite", 
			"action"     => "pageHome"
		);

		$array_routes['/mvc/contato/'] = array(
			"controller" => "ControllerSite", 
			"action"     => "pageContato"
		);

		$this->route = $array_routes;
	}

	/**
	* Direciona o usuário para o controller referente a sua rota
	* @param $url - atual URL do usuário
	*/
	protected function run($url)
	{	
		if(!empty($this->route[$url])){
			require_once "controllers/".$this->route[$url]['controller'].".php";
			$Controller = new $this->route[$url]['controller'];
			$action     = $this->route[$url]['action'];
			$Controller->$action();
		}else{
			echo 'ERRO 404 - Página não existe';
		}
	}

	/**
	* Captura a atual URL do usuário.
	*/
	protected function getUrl()
	{
		if($this->https){
			if (isset($_SERVER['HTTPS'])) 
				return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			else
				header('location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		}else{
			if (isset($_SERVER['HTTPS']))
				header('location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
			else
				return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		}
	}
}
