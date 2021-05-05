<?php
echo $_REQUEST['nombre'] . "|||" . $_REQUEST['email'] . "||| " . $_REQUEST['experiencia'] . "|||" . $_REQUEST['notificaciones'] . "|||" . $_REQUEST['comentario'];

$checkgroup = "";
foreach ($_REQUEST['genero'] as $genero) {
    $checkgroup .= $genero . ",";
}
echo $checkgroup;