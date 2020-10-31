<div class="row"></br> </div>


<div class="row dashboard">
	<div class="col-sm-12">
		<h1>Adicionar</h1>
	</div>
</div>
<form method="POST">
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" name="nome" id="nome" />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="endereco">Endereço:</label>
			<input type="text" class="form-control" name="endereco" id="endereco" />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="endereco">Cidade:</label>
			<input type="text" class="form-control" name="cidade" id="cidade"  />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="estado">Estado:</label>
			<input type="text" class="form-control" name="estado" id="estado" />
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="endereco">CEP:</label>
			<input type="text" class="form-control" name="cep" id="cep"  />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label for="telefone">Telefone:</label>
			<input type="text" class="form-control" name="telefone" id="telefone" />
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="tipo">Tipo de usuário:</label>
			<input type="text" class="form-control" name="tipo" id="tipo" />
		</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
			<label for="senha">E-mail:</label>
			<input type="email" class="form-control" name="email" id="email" />
		</div>
	</div>

</div>
<div class="row">
	<div class="col-sm-11">
		<button type="submit" class="btn btn-default">Salvar</button>
	</div>
		<div class="col-sm-1">
		<a href="<?php echo BASE; ?>users" class="btn btn-danger btn-sm btn-block active" role="button" aria-pressed="true">Cancelar</a>
	</div>

</div>
</form>