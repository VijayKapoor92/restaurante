<?php
/**
* Programador: Vijay Lopes Kapoor
* Data: 23/03/2017
**/
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

class Categoria{
   
   private $nome;

   public function __construct($nome){
      $this->nome = $nome;
   }

   public function getCategoria(){
      return $this->nome;
   }

}

$c = new Categoria("Refrigerante");
print $c->getCategoria();
?>