<?php

require_once PATH_SERVER . "models/dao/UsuarioDao.php";

class Usuario 
{
	private $UsuarioDao;

	/**
	* Abre conexão com o banco de dados.
	*/
	private function abreConexaoBD()
	{
		$this->UsuarioDao = new UsuarioDao;
	}

	/**
	* Fecha a conexão com o banco de dados.
	*/
	private function fechaConexaoBD()
	{
		unset($this->UsuarioDao);
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
