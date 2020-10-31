<div class="row"></br> </div>

<div class="row head-grid1">
	<div class="col-sm-3">
	</div>
</div>

<div class="row title">
	<div class="col-sm-11">
		Rotas
	</div>
	<div class="col-sm-1">
		<a href="<?php echo BASE; ?>rotas/rotaadd" class="btn btn-success btn-sm btn-block active" role="button" aria-pressed="true">Adicionar</a>
	</div>

</div>

<div class="row">
	<div class="col-sm-12"></div>
</div>

<div class="row head-grid1">
	<div class="col-sm-5">Nome</div>
	<div class="col-sm-4">Dias da Semana</div>
	<div class="col-sm-2">Cidade</div>
</div>

<?php if(count($rotas) > 0): ?>
	<?php foreach($rotas as $rota): ?>
		<div class="row linhamessages ">
			<a href="<?php echo BASE; ?>rotas/rotaedt/<?php echo $rota['id'];?>" class="btn-message linhamessages"> 
				<div class="col-sm-5 line-grid">
					<?php echo $rota['nome']; ?>
				</div>
				<div class="col-sm-4 line-grid"> 
					<?php echo $rota['dias']; ?>
				</div>	
				<div class="col-sm-2 line-grid"> 
					<?php echo $rota['cidade']; ?>
				</div>	
			</a>

			<div class="col-sm-1 line-grid">
				<a href="<?php echo BASE; ?>rotas/rotadel/<?php echo $rota['id'];?>" onclick="return confirm('Tem Certeza?')"class="btn-message linhadelete">Delete</a>
			</div> 
		</div>
	<?php endforeach; ?>
<?php endif; ?>

