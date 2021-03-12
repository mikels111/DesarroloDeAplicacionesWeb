<?php
if (isset($_POST['tema'])) {
    setcookie('tema', $_POST['tema']);
    echo '<meta http-equiv="refresh" content="0.1; url=http://172.17.15.6/mikels">';
}
if (!isset($_COOKIE['tema'])) {
    setcookie('tema', "estilos.css");
    echo '<meta http-equiv="refresh" content="0.1; url=http://172.17.15.6/mikels">';
}
?>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/<?php echo $_COOKIE['tema'] ?>">
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

<?php
function recogerVar($variable)
{
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);

    if (strlen($variable) > 0) {
        if (is_numeric($variable)) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}
function recogerVarNum($numero)
{
    $numero = trim($numero);
    if (is_numeric($numero)) {
        if ($numero >= 1900 && $numero <= 2003) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

setcookie("ultima_pagina", $_SERVER['REQUEST_URI'], time() + 60 * 60 * 24 * 30);

if (!isset($_COOKIE['contador'])) {
    setcookie("contador", 0);
}

if ($_SERVER['REQUEST_URI'] == "/mikels/index.php") {
    $cont = $_COOKIE['contador'] + 1;
    setcookie("contador", $cont);
}

?>