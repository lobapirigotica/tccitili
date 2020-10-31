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
						<li><a href="<?php echo BASE; ?>login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        <h1>Login</h1>

	        <?php if(!empty($erro)): ?>
	        <div class="alert alert-danger"><?php echo $erro; ?></div>
		    <?php endif; ?>

	        <form method="POST">

	        	<div class="form-group">
	        		<label for="email">E-mail:</label>
	        		<input type="email" class="form-control" name="email" id="email" />
	        	</div>

	        	<div class="form-group">
	        		<label for="senha">Senha:</label>
	        		<input type="password" class="form-control" name="passw" id="passw" />
	        	</div>

	        	<div class="row">
	        		<div class="col-sm-10">
			        	<button type="submit" class="btn btn-primary btn-default">Enviar</button>
			        </div>
	        		<div class="col-sm-2">
	        			<a href="<?php echo BASE."login/cadastrar"; ?>" class="btn btn-link btn-sm btn-block active" role="button" aria-pressed="true">Cadastrar</a>
					</div>

	        	
	        </form>

	    </div>
    </body>
</html>
