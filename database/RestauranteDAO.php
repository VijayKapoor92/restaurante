<?php
/**
* Programador: Vijay Lopes Kapoor
* Data: 23/03/2017
**/
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

require_once "../util/Conexao.php";

class RestauranteDAO{

   public static function cadastrar($nome, $email, $senha, $fone, $cnpj){

      $sql = "
      INSERT INTO RESTAURANTE
      (NM_RESTAURANTE, NM_EMAIL_RESTAURANTE, NR_SENHA_RESTAURANTE, NR_TELEFONE_RESTAURANTE, NR_CNPJ_RESTAURANTE)
      VALUES
      ('{$nome}', '{$email}','{$senha}','{$fone}','{$cnpj}');
      ";
      
      try{
         $conexao = new Conexao();
         $conexao->conectar();

         mysqli_query($conexao->conexao, $sql);
      }catch(Exception $e){

      }

   }

}

?>