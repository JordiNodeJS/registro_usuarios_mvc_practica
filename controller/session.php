<?php
session_start();
# En session decidimos qué idioma se muestra
// sesión
if ( isset( $_GET['lang'] )) {
    if ($_GET['lang']== "es")  {$_SESSION['idiom'] = "es";
    }
    elseif ($_GET['lang']== "cat") {
      $_SESSION['idiom'] ="cat"; }
} elseif ( !isset($_SESSION['idiom'])) {
  $_SESSION['idiom'] = "es";
}
require_once "../view/idioms/". $_SESSION['idiom'] . '_view.php';
$_SESSION['language'] = $language;
