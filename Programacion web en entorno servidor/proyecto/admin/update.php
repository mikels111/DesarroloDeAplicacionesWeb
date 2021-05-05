<?php 
if(isset($_REQUEST['id'])){
    echo $_REQUEST['titulo'] ." ".$_REQUEST['genero']." ".$_REQUEST['duracion'];
}