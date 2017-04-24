<?php require_once("../util/cabecalho.php");?>
<style type="text/css">
	body{
		background-color: #F5F5F5;
	}
	
</style>
<form name="formulario" class="form-horizontal" method="post" action="../controller/CadastroViewController.php?acao=cadastrar">
	<div class="form-group">
		<label for="usuario" class="col-sm-2 control-label">Nome do Restaurante:</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" id="nome" name="nome" autofocus>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-6">
			<input type="email" class="form-control" id="email" name="email">
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-sm-2 control-label">Senha</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" id="senha" name="senha" maxlength="8">
		</div>
	</div>
	<div class="form-group">
		<label for="cnpj" class="col-sm-2 control-label">Cnpj:</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="cnpj" name="cnpj" maxlength="20">
		</div>
	</div>
	<div class="form-group">
		<label for="telefone" class="col-sm-2 control-label">Cnpj:</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="telefone" name="telefone" maxlength="20">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" id="cadastrar">Sign up</button>
		</div>
	</div>
</form>
<?php require_once("../util/rodape.php");?>