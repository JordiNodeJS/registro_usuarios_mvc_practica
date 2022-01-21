<?php
require_once "../model/model.php";
require_once "../view/view.php";
function sanitize($data) # función que limpia los datos
{
	trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function action_nuevo_usuario($con) # se realiza la conexión del usuario
{
	if (($_SERVER["REQUEST_METHOD"] === "POST") && isset($_REQUEST['registrar'])) { #me aseguro de que la petición se realice desde la acción de usuario post y le botón registrar
#compruebo que los datos del usario no estén vacíos
		$usuario = isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : "";
		$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
# realizo la limpieza de datos que realiza el usuario y lo guardo en las mismas variables para después guardarlos en la base de datos
		$usuario = sanitize($usuario);
		$email = sanitize($email);

		//validar datos
		list($rows, $ok) = modelo_registrar_nuevo_usuario($usuario, $email, $con); # los datos que hemos extraido del usuario los hemos guardado en una array que es lo que nos devuelve esta función, que ahora guardamos en rows
		if ($ok) {
			//Nos devuelve el modelo un true
			vista_registro_completado($usuario, $email, $rows);
			exit;
		} else {
			vista_registro_incorrecto($usuario, $email);
			exit;
		}
	}
}
//si no existe un action declarado se muestra el registro del formulario
if (!isset($_REQUEST['action']))
	vista_mostrar_formulario_registro();

$action = "action_" . $_REQUEST["action"];

$ejecuta = call_user_func($action, $con);

if (!$ejecuta) vista_mostrar_formulario_registro();
