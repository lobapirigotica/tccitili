<div class="row"></br> </div>


<div class="row dashboard">
	<div class="col-sm-12">
		<h1>Editar Trecho</h1>
	</div>
</div>


<form method="POST">
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="cep">Cep:</label>
			<input type="text" class="form-control" data-mask="00000-000" name="cep" id="cep" value="<?php echo $info['cep']; ?>" />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label for="inicio">Nr. Inicio:</label>
			<input type="text" class="form-control" name="inicio" id="inicio" value="<?php echo $info['inicio']; ?>" />
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="fim">Nr. Final:</label>
			<input type="text" class="form-control" name="fim" id="fim" value="<?php echo $info['fim']; ?>" />
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="tempo">Tempo:</label>
			<input type="text" class="form-control" name="tempo" id="tempo" value="<?php echo $info['tempo']; ?>" />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-11">
		<button type="submit" class="btn btn-default">Salvar</button>
	</div>
	<div class="col-sm-1">
		<a href="<?php echo BASE; ?>rotas/rotaedt/<?php echo $info['idrota']; ?>" class="btn btn-danger btn-sm btn-block active" role="button" aria-pressed="true">Cancelar</a>
	</div>

</div>
</form>
