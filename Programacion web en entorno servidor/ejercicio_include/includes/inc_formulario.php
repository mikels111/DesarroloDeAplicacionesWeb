<form method="post">
<p>nombre: <input type="text" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $nombre_form?>" required></p>
<?php echo $nombreError?>
<p>Email: <input type="email" name="email" value="<?php echo $email_form?>"></p>
<?php echo $mailError?>
<p>Año de nacimiento: <input type="number" name="ano" id="ano_nacimiento" required></p>
<?php echo $annoError?>
<p>
    Sexo:
    <input type="radio" name="hm" id="mujer" value="m"> Mujer
    <input type="radio" name="hm" id="hombre" value="h"> Hombre
</p>
<?php echo $hmError?>
<p>
    Conocimientos: 
    <input type="checkbox" name="html" id="html" value="html">HTML
    <input type="checkbox" name="css" id="css" value="css">CSS3
    <input type="checkbox" name="js" id="js" value="js">Javascript
    <input type="checkbox" name="php" id="php" value="php">PHP
    <input type="checkbox" name="java" id="java" value="java">Java
</p>
<p>Observaciones
    <textarea name="observaciones" id="observaciones" cols="50" rows="10"></textarea>
</p>
<p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</p>

</form>