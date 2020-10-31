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

			<?php if(count($rotas) > 0): ?>
				<?php foreach($rotas as $rota): ?>
					<div class="row ">
						<a href="<?php echo BASE; ?>motorista/fazerrota/<?php echo $rota['id'];?>" class="btn-message linhamessages"> 
							<div class="col-lg-5 btn btn-primary btn-lg">
								<?php echo $rota['nome']; ?>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>


	    </div>
    </body>
</html>
