	<!DOCTYPE html>
	<html lang="es">

	<head>
	    <meta charset="UTF-8">
	    <title>FeedBack</title>
	    <link rel="stylesheet" href="../view/tpls/css/custom.css">

	</head>

	<body>
	    <nav>
	        <a href="?lang=es&canvi=true">ES</a>
	        <a href="?lang=cat&canvi=true">CAT</a>

	    </nav>
	    <div class="container">
	        <div class="data wrap">
	            <h3>{{::l_f_h3::}} {{::usuario::}}</h3>
	            <p>{{::l_f_p::}} {{::email::}} </p>
	            <h2>{{::l_h2::}}</h2>
	            <table>
	                <tbody>
	                    <th>{{::l_usuario::}}</th>
	                    <th>{{::l_email::}}</th>
	                    {{::div::}}
	                </tbody>
	            </table>
	            <div class="center"><a class="button" href="?lang=cat">{{::volver::}}</a></div>
				</div>
	    </div>


	</body>

</html>
