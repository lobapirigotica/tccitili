<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Itili</title>
	    <link href="<?php echo BASE; ?>assets/css/bootstrap.min.css" rel="stylesheet">
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
	    
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
	        <h1>Cadastro</h1>

	        <?php if(!empty($erro)): ?>
	        <div class="alert alert-danger"><?php echo $erro; ?></div>
		    <?php endif; ?>

	        <form method="POST">
	        	<div class="form-group">
		        	<div class="row">
		        		<div class="col-sm-12">
			        		<label for="email">E-mail:</label>
	        				<input type="email" class="form-control" name="email" id="email" />
	        			</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-sm-6">
		        			<label for="passw">Senha:</label>
			        		<input type="password" class="form-control" name="passw" id="passw" />
			        	</div>
			        	<div class="col-sm-6">
			        		<label for="passw2">Repita a Senha:</label>
			        		<input type="password" class="form-control" name="passw2" id="passw" />
			        	</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-sm-6">
		        			<label for="name">Nome Completo:</label>
		        			<input type="nome" class="form-control" name="name" id="name" />
		        		</div>
		        		<div class="col-sm-4">
		        			<label for="cep">CEP:</label>
		        			<input type="endereco" class="form-control" name="cep" id="cep" minlength="9" maxlength="9"/>
		        		</div>
		        		<div class="col-sm-2">
		        			<label for="num">Número:</label>
		        			<input type="num" class="form-control" name="num" id="num" />
		        		</div>
		        	</div>
	        	<br>
	        	<div class="row">
	        		<div class="col-sm-10">
			        	<button type="submit" class="btn btn-primary btn-default">Enviar</button>
			        </div>
	        		
	        </form>

	    </div>
    </body>
</html>