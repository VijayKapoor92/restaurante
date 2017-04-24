<?php require_once("../util/cabecalho.php");?>
<style type="text/css">
   body{
      background-color: #F5F5F5;
   }
</style>
<form name="formulario" class="form-horizontal" method="post" action="../controller/ProdutoViewController.php?acao=adicionar">
	<div class="form-group">
		<label for="nm_produto" class="col-sm-2 control-label">Nome produto:</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nm_produto" name="nm_produto" placeholder="Narguile" autofocus>
		</div>
	</div>
   <div class="form-group">
		<label for="vl_produto" class="col-sm-2 control-label">Valor:</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="vl_produto" name="vl_produto" autofocus>
		</div>
	</div>
   <div class="form-group">
		<label for="nm_descricao_produto" class="col-sm-2 control-label">Descrição* :</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nm_descricao_produto" name="nm_descricao_produto" placeholder="O melhor da cidade" autofocus>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" id="cadastrar">Cadastrar</button>
		</div>
	</div>
   <div id="categorias"/>
</form>
<?php require_once("../util/rodape.php");?>
<script>
$(document).ready(function(){
   $("form").submit(function(){
      if($("#nm_produto").val() == ""){
         alert("Tem que preencher o nome do produto");
         return false;
      }
      if($("#vl_produto").val() == ""){
         alert("Tem que preencher o valor do produto");
         return false;
      }
   });
});

var listarCategoria = function(){
   $.post("../controller/CategoriaViewController.php",{"acao":"listar", "nome":"", "id":"1"}).success(function(data){
      alert(data.categoria.id_categoria);
   });
}
</script>