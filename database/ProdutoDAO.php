<?php
/**
* Programador: Vijay Lopes Kapoor
* Data: 29/03/2017
**/
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

require_once "../util/Conexao.php";

class ProdutoDAO{

   public static function adicionar($nm_produto, $vl_produto, $nm_descricao_produto){
      
      $sql = "
      INSERT INTO PRODUTO
      (NM_PRODUTO, VL_PRODUTO, NM_DESCRICAO_PRODUTO)
      VALUES
      ('{$nm_produto}', {$vl_produto}, '{$nm_descricao_produto}')
      ";

      try{
         $conexao = new Conexao();
         $conexao->conectar();

         mysqli_query($conexao->conexao, $sql);
         print "Produto adicionado";
      }catch(Exception $e){

      }
   }

}

?>