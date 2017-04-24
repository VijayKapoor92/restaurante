<?php require_once("../util/cabecalho.php");?>
<style type="text/css">
   body{
      background-color: #F5F5F5;
   }
</style>
<form name="formulario" class="form-horizontal">
	<div class="form-group">
		<label for="usuario" class="col-sm-2 control-label">Nome Categoria:</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nome" name="nome" autofocus>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="button" class="btn btn-default" id="cadastrar">Cadastrar</button>
		</div>
	</div>
   <div id="categorias"/>
</form>
<?php require_once("../util/rodape.php");?>
<script>
$(document).ready(function(){
   $("#cadastrar").on("click", function(){
      if($("#nome").val() == ""){
         alert("Tem que preencher o nome da categoria");
         return false;
      }
      adicionarCategoria();
   });
   listarCategoria();
});

var adicionarCategoria = function(){
   $.post("../controller/CategoriaViewController.php",{"acao":"adicionar", "nome":$("#nome").val(), "id":"1"}).success(function(){
      $("input").val("");
      $("input").focus();
   });
}

var listarCategoria = function(){
   $.post("../controller/CategoriaViewController.php",{"acao":"listar", "nome":"", "id":"1"}).success(function(data){
      alert(data.categoria.id_categoria);
   });
}
</script>