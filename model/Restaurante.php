<?php
/**
* Programador: Vijay Lopes Kapoor
* Data: 17/01/2017
**/
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

class Restaurante {

	private $nome;
	private $cnpj;
	private $cardapio;

	public function __construct($nome, $cnpj, Cardapio $cardapio=null){
		$this->nome = $nome;
		$this->cnpj = $cnpj;
		$this->cardapio = $cardapio;
	}

	public function getCompanyName(){
		return $this->nome;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function getCompanyInfo(){
		$str = "Nome da empresa: {$this->nome}</br>";
		$str .= "Cnpj: {$this->cnpj}";
		return $str;
	}
	
}

// $c = new Restaurante("Restaurante Alibaba","000000000000");
// print $c -> getCompanyInfo();

?>