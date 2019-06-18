<?php

namespace App\models\dao;
use App\config\ConexaoBD;

class ProdutosDao	 
{
  public function __construct()
  {
    $this->pdo = ConexaoBD::getConnection();
  }

  public function __destruct()
  {
    unset($this->pdo);
  }

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
