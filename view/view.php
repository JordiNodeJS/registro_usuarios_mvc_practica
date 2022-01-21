<?php
require_once "../controller/session.php";
function vista_registro_completado($usuario, $email, $rows)
{

	$div = "";
	if (!empty($rows)) {
		foreach ($rows as $value) {
			$div .= "<tr><td>" . $value['usuario'] . " </td> " . "<td>" . $value['email'] . "</td></tr>";
		}
		$div .= "";
	}

	$params = [
		"usuario" => $usuario,
		"email" => $email,
		"div" => $div
	];
	$_SESSION["p"] = $params;
	$_SESSION["language"] = array_merge($params, $_SESSION["language"]);
	mostrar_tpls($_SESSION["language"], "../view/tpls/feedback.tpl");
}


function vista_registro_incorrecto($usuario, $email)
{
	_vista_form_registro($usuario, $email, false);
}
function vista_mostrar_formulario_registro()
{
	_vista_form_registro("", "", true);
}
function _vista_form_registro($usuario, $email, $primera_vez)
{
	$mensaje_error = "";
	$class_error = "";
	$mensaje_error_class = "";
	if (!$primera_vez) {
		$class_error = "error";
		$mensaje_error = $_SESSION["language"]["mensaje_error"];
		$mensaje_error_class = "msg_error";
	}
	$params = [
		"usuario" => $usuario,
		"email" => $email,
		"class_error" => $class_error,
		"mensaje_error" => $mensaje_error,
		"mensaje_error_class" => $mensaje_error_class
	];
	$replacements = array_merge($_SESSION["language"], $params );
	$_SESSION["language"] = $replacements;
	mostrar_tpls($_SESSION["language"], "../view/tpls/form.tpl");
}

function mostrar_tpls($replacements, $dir_tpl)
{
	$html = file_get_contents($dir_tpl);
	foreach ($replacements as $key => $value) {
		$html = str_replace("{{::$key::}}", $value, $html);
	}
	echo $html;
	exit;
}


require_once "../view/cambio.php";
