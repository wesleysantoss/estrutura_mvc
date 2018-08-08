<?php

require_once "Controller.php";

class ControllerSite extends Controller
{

	public function pageHome()
	{
		require_once "../models/dao/ProdutosDao.php";

		$produtoDao = new ProdutoDao;

		// Solicita para a DAO dados para ser mostrado na view.
		$param = $produtoDao->getAllProdutos();

		unset($produtoDao);
		
		$array_css = ['home.css'];
		$array_js  = ['home.js'];
		$title     = 'Início';
		$view      = 'home';

		$this->setCss($array_css);
		$this->setJs($array_js);
		$this->renderSite($view, $title, $param);
	}

	public function pageContato()
	{
		$array_css = '';
		$array_js  = '';
		$title     = 'Contato';
		$view      = 'contato';

		$this->setCss($array_css);
		$this->setJs($array_js);
		$this->renderSite($view, $title);
	}
	
}