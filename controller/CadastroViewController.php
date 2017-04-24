<?php
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

require_once "../model/Restaurante.php";
require_once "../database/RestauranteDAO.php";

class CadastroViewController {

   private $nomeRestauranteField;
   private $emailField;
   private $senhaField;
   private $telefoneField;
   private $cnpjField;

   public function __construct($nomeRestaurante, $email, $senha, $telefone, $cnpj){
      $this->nomeRestauranteField = $nomeRestaurante;
      $this->emailField = $email;
      $this->senhaField = $senha;
      $this->telefoneField = $telefone;
      $this->cnpjField = $cnpj;
   }

   public function cadastrar(){
      RestauranteDAO::cadastrar($this->nomeRestauranteField, $this->emailField, $this->senhaField, $this->telefoneField, $this->cnpjField);
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

$cvc = new CadastroViewController($_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["telefone"],$_POST["cnpj"]);
$cvc->$action();

?>