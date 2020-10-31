<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Itili</title>
	    <link href="<?php echo BASE; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo BASE; ?>">Itili Coleta de Lixo</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo BASE; ?>login/sair">Sair</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        
	        <?php
	        $tempo = 0;
	        $restante = 0;

			$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
			$diasemana_numero = date('w', time());

	        ?>
	        <h1>Rota - Hoje é <?php echo $diasemana[$diasemana_numero]; ?>!</h1>
	        <br>
<div class="row">
	<div class="col-sm-1 btn <?php echo (in_array('1',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Domingo
	</div>
	<div class="col-sm-1 btn <?php echo (in_array('2',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Segunda
	</div>
	<div class="col-sm-1 btn <?php echo (in_array('3',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Terça
	</div>
	<div class="col-sm-1 btn <?php echo (in_array('4',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Quarta</div>
	<div class="col-sm-1 btn <?php echo (in_array('5',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Quinta
	</div>
	<div class="col-sm-1 btn <?php echo (in_array('6',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Sexta
	</div>
	<div class="col-sm-1 btn <?php echo (in_array('7',$dias) ? "btn-success" : "btn-danger" ); ?> btn-sm ">Sabado
	</div>
</div>
<br>


			<?php if(in_array($diasemana_numero+1,$dias)): ?>
	        <?php if(count($trechos) > 0): ?>
				<?php foreach($trechos as $trecho): ?>
					<div class="row ">
						<?php 
							if($suarua[0]['cep'] != $trecho['cep']){
								$tempo = $tempo + $trecho['tempo'];
							}else{
								$restante = $tempo;
							} 
						?>
						<div class="col-sm-12 btn btn-primary btn-sm">
							<?php echo $trecho['rua']; ?>
						</div>					
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<div class="row">
		    	<div class="col-sm-12">Tempo estimado para sua Casa: <?php echo $restante." ";?> minutos  
		    	</div>
		    </div>
			<?php else: ?><h2>
				<?php echo "Hoje não tem Coleta"?></h2>
			<?php endif; ?>

	        <?php if(!empty($erro)): ?>
	        <div class="alert alert-danger"><?php echo $erro; ?></div>
		    <?php endif; ?>

		    
	    </div>
    </body>
</html>
