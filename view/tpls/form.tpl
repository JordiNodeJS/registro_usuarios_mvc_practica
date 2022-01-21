	<!DOCTYPE html>
	<html lang="es">

	<head>
	    <meta charset="UTF-8">
	    <title>Form</title>
		<link rel="stylesheet" href="../view/tpls/css/custom.css">
	    <style>

	    </style>

	</head>

	<body>
	    <nav>
	        <a href="?lang=es">ES</a>
	        <a href="?lang=cat">CAT</a>
	    </nav>
	    <div class="container wrap">
	        <div>
				<form method="post" action="../controller/app.php">
					<label><b> {{::l_usuario::}}</b>
						<input type="text" class="{{::class_error::}}" name="usuario" value="{{::usuario::}}" /></label>
					<label><b> {{::l_email::}}</b>
						<input type="text" class="{{::class_error::}}" name="email" value="{{::email::}}" />
					</label>
					<input type="hidden" name="action" value="nuevo_usuario">
					<input type="submit" class="btn btn-primary" name="registrar" value="{{::l_registrar::}}" /><br>
								<p class="{{::mensaje_error_class::}}">{{::mensaje_error::}}</p>
				</form>
			</div>
	    </div>

	</body>

</html>
