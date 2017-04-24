<?php
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

require_once "../model/Produto.php";
require_once "../database/ProdutoDAO.php";

class ProdutoViewController {

   private $nomeProdutoField;
   private $valorProdutoField;
   private $descricaoProdutoField;

   public function __construct($nome, $valor, $descricao){
      $this->nomeProdutoField = $nome;
      $this->valorProdutoField = $valor;
      $this->descricaoProdutoField = $descricao;
   }

   public function adicionar(){
      ProdutoDAO::adicionar($this->nomeProdutoField, $this->valorProdutoField, $this->descricaoProdutoField);
      print "Restaurante Cadastrado";
   }

   // private function setNewRestaurant(){
   //    $restaurante = new Restaurant(
   //       $this->nomeRestauranteField,
   //       $this->cnpjField
   //    );
   // }

}

$action = $_GET["acao"];

$cvc = new ProdutoViewController($_POST["nm_produto"], $_POST["vl_produto"], $_POST["nm_descricao_produto"]);
$cvc->$action();

?>