<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>ADMACO</title>
	    <link href="<?php echo BASE; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo BASE; ?>">ADMACO Business Machine</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo BASE; ?>login/entrar">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        <h1>Change Password</h1>
	        
	        <?php if(!empty($erro)): ?>
	        <div class="alert alert-danger"><?php echo $erro; ?></div>
		    <?php endif; ?>

	        <form method="POST">

	        	<div class="form-group">
	        		<label for="passw1">Password:</label>
	        		<input type="password" class="form-control" name="passw1" id="passw1" />
	        	</div>

	        	<div class="form-group">
	        		<label for="senha">Confirm:</label>
	        		<input type="password" class="form-control" name="passw2" id="passw2" />
	        	</div>

	        	<button type="submit" class="btn btn-default">Submit</button>

	        </form>

	    </div>
    </body>
</html>