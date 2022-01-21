	<!DOCTYPE html>
	<html lang="es">

	<head>
	    <meta charset="UTF-8">
	    <title>Form</title>
	    <!-- <link rel="stylesheet" href="../view/tpls/css/custom.css"> -->
	    <link rel="stylesheet" href="../view/tpls/css/style.css">
	    <style>

	    </style>

	</head>

	<body class="container-fluid">
	    <nav>
	        <a href="?lang=es">ES</a>
	        <a href="?lang=cat">CAT</a>
	    </nav>
	    <div class="card text-white bg-dark mb-3  mx-auto" style="max-width: 15rem;">
	       <!-- <div class="card-header">Registro de usuario</div> -->
	        <div class="card-body">
	            <form class="card-text" method="post" action="../controller/app.php">
	                <label class="form-label mt-4"><b> {{::l_usuario::}}</b>
	                    <input class="form-control" type="text" class="{{::class_error::}}" name="usuario"
	                        value="{{::usuario::}}" />
	                </label>

	                <label class="form-label mt-2"><b> {{::l_email::}}</b>
	                    <input class="form-control" type="text" class="{{::class_error::}}" name="email"
	                        value="{{::email::}}" />
	                </label>

	                <input type="hidden" name="action" value="nuevo_usuario">
	                <input type="submit" class="btn btn-primary mt-4" name="registrar" value="{{::l_registrar::}}" /><br>
	                <p class="{{::mensaje_error_class::}}">{{::mensaje_error::}}</p>
	            </form>
	        </div>
	    </div>

	</body>

</html>
