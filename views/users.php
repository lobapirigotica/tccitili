<div class="row"></br> </div>

<div class="row head-grid1">
	<div class="col-sm-3">
	</div>
</div>

<div class="row title">
	<div class="col-sm-11">
		Usuarios
	</div>
	<div class="col-sm-1">
		<a href="<?php echo BASE; ?>users/useradd" class="btn btn-success btn-sm btn-block active" role="button" aria-pressed="true">Adicionar</a>
	</div>

</div>

<div class="row">
	<div class="col-sm-12"></div>
</div>

<div class="row head-grid1">
	<div class="col-sm-5">Nome</div>
	<div class="col-sm-4">e-mail</div>
	<div class="col-sm-2">Telefone</div>
</div>

<?php if(count($users) > 0): ?>
	<?php foreach($users as $user): ?>
		<div class="row linhamessages ">
			<a href="<?php echo BASE; ?>users/useredt/<?php echo $user['id'];?>" class="btn-message linhamessages"> 
				<div class="col-sm-5 line-grid">
					<?php echo $user['nome']; ?>
				</div>
				<div class="col-sm-4 line-grid"> 
					<?php echo $user['email']; ?>
				</div>	
				<div class="col-sm-2 line-grid"> 
					<?php echo $user['telefone']; ?>
				</div>	
			</a>

			<div class="col-sm-1 line-grid">
				<a href="<?php echo BASE; ?>users/userdel/<?php echo $user['id'];?>" onclick="return confirm('Tem Certeza?')"class="btn-message linhadelete">Delete</a>
			</div> 
		</div>
	<?php endforeach; ?>
<?php endif; ?>


