<?php

require_once PATH . "/models/dao/ProdutosDao.php";

class Produtos 
{
	private $ProdutoDao;

	/**
	* Abre conexão com a DAO.
	*/
	private function abreConexaoBD()
	{
		$this->ProdutoDao = new ProdutoDao;
	}

	/**
	* Fecha a conexão com a DAO.
	*/
	private function fechaConexaoBD()
	{
		unset($this->ProdutoDao);
	}

	/**
	 * Função de exemplo que busca todos os produtos
	 */
	public function buscarProduto()
	{
		// Abre conexão com a DAO.
		$this->abreConexaoBD();

		$produtos = $this->ProdutoDao->getProduto();

		// Fecha conexão com a DAO.
		$this->fechaConexaoBD();

		return $produtos;
	}

}

?>
