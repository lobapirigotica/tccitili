<div class="row"></br> </div>


<div class="row dashboard">
	<div class="col-sm-12">
		<h1>Editar Rotas</h1>
	</div>
</div>


<form method="POST">
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $info['nome']; ?>" />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="cidade">Cidade:</label>
			<input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $info['cidade']; ?>" />
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
			<input class="form-check-input" type="checkbox" name="domingo" id="domingo" value="1" <?php echo (in_array('1',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="segunda" id="segunda" value="2" <?php echo (in_array('2',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="terca" id="terca" value="3" <?php echo (in_array('3',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="quarta" id="quarta" value="4" <?php echo (in_array('4',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="quinta" id="quinta" value="5" <?php echo (in_array('5',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="sexta" id="sexta" value="6" <?php echo (in_array('6',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="sabado" id="sabado" value="7" <?php echo (in_array('7',$dias) ? "checked" : "" ); ?>>
		</div>
	</div>

</div>
<br>
<div class="row title">
	<div class="col-sm-11">
		Ruas
	</div>
	<div class="col-sm-1">
		<a href="<?php echo BASE; ?>trechos/trechoadd/<?php echo $info['id']; ?>" class="btn btn-success btn-sm btn-block active" role="button" aria-pressed="true">Adicionar</a>
	</div>

</div>

<div class="row head-grid1">
	<div class="col-sm-5">Nome da Rua</div>
	<div class="col-sm-2">Nr inicio</div>
	<div class="col-sm-2">Nr Fim</div>
	<div class="col-sm-2">Tempo</div>
</div>

<?php if(count($trechos) > 0): ?>
	<?php foreach($trechos as $trecho): ?>
		<div class="row linhamessages ">
			<a href="<?php echo BASE; ?>trechos/trechoedt/<?php echo $trecho['id'];?>" class="btn-message linhamessages"> 
				<div class="col-sm-1 line-grid">
					<?php echo $trecho['cep']; ?>
				</div>
				<div class="col-sm-4 line-grid">
					<?php echo $trecho['rua']; ?>
				</div>
				<div class="col-sm-2 line-grid"> 
					<?php echo $trecho['inicio']; ?>
				</div>	
				<div class="col-sm-2 line-grid"> 
					<?php echo $trecho['fim']; ?>
				</div>	
				<div class="col-sm-2 line-grid"> 
					<?php echo $trecho['tempo']; ?>
				</div>	
			</a>

			<div class="col-sm-1 line-grid">
				<a href="<?php echo BASE; ?>trechos/trechodel/<?php echo $trecho['id'];?>/<?php echo $trecho['idrota'];?>" onclick="return confirm('Tem Certeza?')"class="btn-message linhadelete">Delete</a>
			</div> 
		</div>
	<?php endforeach; ?>
<?php endif; ?>


<br>
<div class="row">
	<div class="col-sm-11">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
	<div class="col-sm-1">
		<a href="<?php echo BASE; ?>rotas" class="btn btn-danger btn-sm btn-block active" role="button" aria-pressed="true">Cancelar</a>
	</div>

</div>
</form>
