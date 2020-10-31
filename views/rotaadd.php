<div class="row"></br> </div>


<div class="row dashboard">
	<div class="col-sm-12">
		<h1>Adicionar Rota</h1>
	</div>
</div>


<form method="POST">
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" name="nome" id="nome"  />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="cidade">Cidade:</label>
			<input type="text" class="form-control" name="cidade" id="cidade"  />
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-1">
		<div class="form-check">
			<label for="domingo">Domingo:</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label for="segunda">Segunda:</label>
		</div>
	</div>

	<div class="col-sm-1">
		<div class="form-check">
			<label for="terca">Terca:</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label for="segunda">Quarta:</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label for="segunda">Quinta:</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label for="segunda">Sexta:</label>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<label for="segunda">Sabado:</label>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="domingo" id="domingo" value="1" >
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="segunda" id="segunda" value="2">
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="terca" id="terca" value="3">
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="quarta" id="quarta" value="4">
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="quinta" id="quinta" value="5">
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="sexta" id="sexta" value="6">
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="sabado" id="sabado" value="7" >
		</div>
	</div>

</div>
<br>
<div class="row">
	<div class="col-sm-11">
		<button type="submit" class="btn btn-default">Salvar</button>
	</div>
	<div class="col-sm-1">
		<a href="<?php echo BASE; ?>users" class="btn btn-danger btn-sm btn-block active" role="button" aria-pressed="true">Cancelar</a>
	</div>

</div>
</form>