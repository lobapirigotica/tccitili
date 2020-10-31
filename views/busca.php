<h1>Result</h1>
<div class="row head-grid">
	<div class="col-sm-12">Name</div>
</div>
<?php foreach($resultado as $pessoa): ?>
		<div class="row linhamessages">
			<a href="<?php echo BASE; ?>view/viewprofile/<?php echo $pessoa['id'];?>" class="btn-message linhamessages"> 
				<div class="col-sm-12 line-grid">
					<?php echo $pessoa['name']; ?>
				</div>
			</a>
		</div>
<?php endforeach; ?>
