<?php
/**
* Programador: Vijay Lopes Kapoor
* Data: 29/03/2017
**/
ini_set("display_errors","on");
date_default_timezone_set("America/Sao_Paulo");

require_once "../util/Conexao.php";

class CategoriaDAO{
      
   public static function addCategoria($nm_categoria, $id){

      $sql = "
      INSERT INTO CATEGORIA
      (NM_CATEGORIA, ID_RESTAURANTE)
      VALUES
      ('{$nm_categoria}', {$id})
      ";
      
      try{
         $conexao = new Conexao();
         $conexao->conectar();

         mysqli_query($conexao->conexao, $sql);
         print "Categoria adicionada";
      }catch(Exception $e){

      }

   }

   public static function listar($id){
      
      $sql = "
      SELECT 
         ID_CATEGORIA as \"id_categoria\",
         NM_CATEGORIA as \"nm_categoria\"
      FROM
         CATEGORIA
      WHERE
         ID_CATEGORIA = {$id}
      ";
      
      try{
         $conexao = new Conexao();
         $conexao->conectar();

         $rs = mysqli_query($conexao->conexao,$sql);
         $json = array();

         while($data = mysqli_fetch_assoc($rs)){
            array_walk($data, function(&$entry){
               if($entry!=null){
                  $entry = utf8_encode($entry);
               }
            });
               $json[] = $data;
         }

         return '{"categoria":'.json_encode($json).'}';
      }catch(Exception $e){

      }

   }

}

?>