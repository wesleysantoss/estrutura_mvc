<?php

require_once PATH_SERVER . "models/dao/ProdutoDao.php";

class Usuario 
{
	private $ProdutoDao;

	/**
	* Abre conexão com o banco de dados.
	*/
	private function abreConexaoBD()
	{
		$this->ProdutoDao = new ProdutoDao;
	}

	/**
	* Fecha a conexão com o banco de dados.
	*/
	private function fechaConexaoBD()
	{
		unset($this->ProdutoDao);
	}

	public function buscarProdutos()
	{
		// Abre conexão com o BD.
		$this->abreConexaoBD();

		$produtos = $this->ConexaoBD->getAllProdutos();

		// Fecha conexão com o BD.
		$this->fechaConexaoBD();

		return $produtos;
	}

}

?>
