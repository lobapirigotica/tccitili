<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Itili</title>
	    <link rel="icon" href="<?php echo BASE; ?>assets/images/recycle.ico">
	    <link href="<?php echo BASE; ?>assets/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php echo BASE; ?>assets/css/template.css" rel="stylesheet">
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
	    <script type="text/javascript">var BASE_URL = '<?php echo BASE; ?>';</script>
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/chart.min.js"></script>
	    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>

    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo BASE; ?>">Itili Coleta de Lixo</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<?php echo $viewData['user_name']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo BASE; ?>login/changepass">Alterar Senha</a></li>
								<li><a href="<?php echo BASE; ?>login/sair">Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row botoes">
				<div class="col-sm-3">
					<a href="<?php echo BASE; ?>" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Home</a>
				</div>
				<div class="col-sm-3">
					<a href="<?php echo BASE; ?>users" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Usuários</a>
				</div>
				<div class="col-sm-3">
					<a href="<?php echo BASE; ?>rotas" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Rotas</a>
				</div>
				
				<div class="col-sm-3">
					<a href="<?php echo BASE; ?>reports" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Relatorios</a>
				</div>
			</div>

			
	        <?php
	        $this->loadViewInTemplate($viewName, $viewData);
	        ?>
	    </div>
    </body>
</html>
