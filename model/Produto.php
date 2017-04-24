<?php
/**
* Programador: Vijay Lopes Kapoor
* Data: 17/01/2017
**/
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

class Produto {
    
    private $nome;
    private $vl_produto;
    private $categoria;

    public function __construct($name, $price, $category=null){
        $this->nome = $name;
        $this->vl_produto = $price;
        $this->categoria = $category;
    }

    public function getProductName(){
        return $this->nome;
    }

    public function getProductPrice(){
        return $this->vl_produto;
    }

    public function getProductCategory(){
        return $this->categoria;
    }

    public function getProdutoInfo(){
        return "Nome: ".$this->nome."<br/>".
        "Código: ".$this->cd_produto."<br/>".
        "Valor: ".$this->vl_produto."<br/>".
        "Categoria: ".$this->categoria;
    }

}
?>