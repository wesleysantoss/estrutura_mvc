<?php

namespace App\models\classes;
use App\models\dao\ProdutosDao;

class Produtos 
{
	private $ProdutosDao;

	/**
	* Abre conexão com a DAO.
	*/
	private function abreConexaoBD()
	{
		$this->ProdutosDao = new ProdutosDao;
	}

	/**
	* Fecha a conexão com a DAO.
	*/
	private function fechaConexaoBD()
	{
		unset($this->ProdutosDao);
	}

	/**
	 * Função de exemplo que busca todos os produtos
	 */
	public function buscarProduto()
	{
		// Abre conexão com a DAO.
		$this->abreConexaoBD();

		$produtos = $this->ProdutosDao->getProduto();

		// Fecha conexão com a DAO.
		$this->fechaConexaoBD();

		return $produtos;
	}

}

?>
