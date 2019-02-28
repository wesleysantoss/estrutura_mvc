<?php

// require_once PATH . "/config/ConexaoBD_Site.php";

class ProdutoDao	 
{
  // public function __construct()
  // {
  //   $this->pdo = ConexaoBDSite::getConnection();
  // }

  // public function __destruct()
  // {
  //   unset($this->pdo);
  // }

  /**
  * Função que pega todos os produtos.
  */
  public function getProduto()
  {
     // Simula uma consulta SQL.

     $produto = array(
      "nome" => "Teste",
      "valor" => 1.99
     );

     return $produto;
  }
}
?>
