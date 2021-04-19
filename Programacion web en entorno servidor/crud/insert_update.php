<?php
echo $_REQUEST['id'];
echo $_REQUEST['nombre'];
$tipo = null;
var_dump($tipo);
if (empty($_REQUEST['tipo'])) {
    echo "es nula";
}
