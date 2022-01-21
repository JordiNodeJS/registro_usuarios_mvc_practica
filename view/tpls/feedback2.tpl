	<!DOCTYPE html>
	<html lang="es">

	<head>
	    <meta charset="UTF-8">
	    <title>FeedBack</title>
	    <!-- <link rel="stylesheet" href="../view/tpls/css/custom.css"> -->
	    <link rel="stylesheet" href="../view/tpls/css/style.css">

	</head>

	<body class="container">
	    <nav>
	        <a href="?lang=es&canvi=true">ES</a>
	        <a href="?lang=cat&canvi=true">CAT</a>
	    </nav>
	    <div class="mx-auto">
	        <div class="data">
	            <h3>{{::l_f_h3::}} {{::usuario::}}</h3>
	            <p>{{::l_f_p::}} {{::email::}} </p>
	            <h2>{{::l_h2::}}</h2>
	            <table class="table table-dark table-striped">
	                <tbody>
	                    <th>{{::l_usuario::}}</th>
	                    <th>{{::l_email::}}</th>
	                    {{::div::}}
	                </tbody>
	            </table>
	            <p class="center"><a class="btn btn-primary" href="?lang=cat">{{::volver::}}</a></p>
	        </div>
	    </div>

	</body>

</html>
