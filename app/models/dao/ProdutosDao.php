<?php

require_once PATH_SERVER . "config/ConexaoBD_Site.php";

class ProdutoDao	 
{
  public function __construct()
  {
    $this->pdo = ConexaoBDSite::getConnection();
  }

  public function __destruct()
  {
    unset($this->pdo);
  }

  /**
  * Função que pega todos os produtos.
  */
  public function getAllProdutos()
  {
     // Código SQL.

     $produtos = '{"nome" : "Produto de teste", "preco": 90}';

     return json_decode($produtos);
  }
}
?>
