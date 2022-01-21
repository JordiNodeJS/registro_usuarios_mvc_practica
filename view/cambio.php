<?php
# se realiza el cambio de idioma de la plantilla feedback.tpl
if (isset($_GET["canvi"]) && $_GET["canvi"] == true) {

    $_SESSION["language"] = array_merge($_SESSION["language"], $_SESSION["p"]);
    mostrar_tpls($_SESSION["language"], "../view/tpls/feedback.tpl");
}
