<?php
require_once "../model/connect.php";
function modelo_registrar_nuevo_usuario($usuario, $email, $con)
{
    //lectura.....intenta escribir
    if (empty($usuario) || empty($email)) return false;

    $myrows = [];

    $selectQuery = "SELECT * FROM usuarios WHERE usuario='$usuario' OR email='$email' "; #creamos la consulta que queremos realizar de usuarios
    $result = $con->query($selectQuery);# realizamos la consulta a la base de datos
    if ($result->num_rows > 0) { # nos devuelve falso si la base de datos no hay ningún usuario
        return false;
    }
    $insertQuery = "INSERT INTO usuarios (usuario, email) VALUES  ('$usuario','$email')";
    $result = $con->query($insertQuery);# si resulta que el usuario es nuevo se procede a insertar el nuevo usuario con su e-mail

    if ($result) { # si hay datos en la base de datos guardamos los nuevos que hemos generado y los devolvemos como un nuevo array para luego poder utilizarlos e insertarlos.
        $selectallQuery = "SELECT * FROM usuarios";
        $result = $con->query($selectallQuery);
        while ($row = $result->fetch_assoc()) {
            $myrows[] = $row;
        }
    } else {
        return false;
    }
    return [$myrows, true];
    $con->close();
}
