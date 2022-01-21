<?php

require_once "../config.php";


$con = new mysqli($host, $user, $pass, $bd);

if ($con->connect_errno) {
    die('Errorum de connexión  (' . $con->connect_errno . ') ' . $con->connect_error);
    exit;
}
echo "<p class=\"conexion\">Connected: " . $con->host_info . "</p>";
