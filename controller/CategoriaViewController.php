<?php
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

require_once "../database/CategoriaDAO.php";

class CategoriaViewController {

   private $nomeCategoria;
   private $idRestaurante;

   public function __construct($nome=null, $id=null){
      $this->nomeCategoria = $nome;
      $this->idRestaurante = $id;
   }

   public function adicionar(){
      CategoriaDAO::adicionar($this->nomeCategoria, $this->idRestaurante);
   }

   public function listar(){
      print CategoriaDAO::listar($this->idRestaurante);
   }

   // private function setNewRestaurant(){
   //    $restaurante = new Restaurant(
   //       $this->nomeRestauranteField,
   //       $this->cnpjField
   //    );
   // }

}

if(isset($_GET["acao"])){
   $action = $_GET["acao"];
}

if(isset($_POST["acao"])){
   $action = $_POST["acao"];
}

$nome="";
$id="";

if(isset($_POST["nome"])){
   $nome = $_POST["nome"];
}

if(isset($_POST["id"])){
   $id = $_POST["id"];
}

$cvc = new CategoriaViewController($nome, $id);
$cvc->$action();

?>