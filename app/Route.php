<?php

class Route 
{
	private $route;         // Variavel que receber todas as rotas possiveis do sistema.
	private $https = false; // Identifica se a rota deve transformar todas requisições em HTTPS.

	public function iniciarAplicacao()
	{
		$this->iniciarRotas();
		$this->run($this->getUrl());
	}
	
	/**
	* Inicia todas as rotas possiveis do sistema.
	*/
	protected function iniciarRotas()
	{	
		// As rotas devem ser construida com a chave do array sendo a rota em si.
		$array_routes['/estrutura-mvc/home'] = array( 
			"controller" => "App\controllers\ControllerSite", // Controller a ser chamado nessa rota. 
			"action"     => "pageHome"        // Função do controller a ser chamado.
		);

		// Rotas de API
		// Para requisições AJAX.
		$array_routes['/estrutura-mvc/api/getProdutos'] = array( 
			"controller" => "App\controllers\ControllerSite", 
			"action"     => "getProduto"       
		);

		$this->route = $array_routes;
	}

	/**
	* Direciona o usuário para o controller referente a sua rota
	* @param $url - atual URL do usuário.
	*/
	protected function run($url)
	{	
		if(!empty($this->route[$url])){
			$Controller = new $this->route[$url]['controller'];
			$action     = $this->route[$url]['action'];
			$Controller->$action();
		}else{
			echo 'ERRO 404 - Página não existe';
		}
	}

	/**
	* Identifica qual é a atual URL do usuário.
	* @return String com a atual URL do usuário.
	*/
	protected function getUrl()
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
