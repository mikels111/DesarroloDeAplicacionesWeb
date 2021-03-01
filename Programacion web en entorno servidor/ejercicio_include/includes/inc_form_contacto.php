<form action="respuesta.php" method="post">
<p>nombre: <input type="text" name="nombre" id="nombre" placeholder="nombre" required></p>
<p>Email: <input type="email" name="email" required></p>
<p>Año de nacimiento: <input type="number" name="ano" id="ano_nacimiento" min="1900" max="2003" required></p>
<p>
    Sexo:
    <input type="radio" name="hm" id="mujer" value="m" checked> Mujer
    <input type="radio" name="hm" id="hombre" value="h"> Hombre
</p>
<p>
    Conocimientos: 
    <input type="checkbox" name="html" id="html" value="html">HTML
    <input type="checkbox" name="css" id="css" value="css">CSS3
    <input type="checkbox" name="js" id="js" value="js">Javascript
    <input type="checkbox" name="php" id="php" value="php">PHP
</p>
<p>Observaciones
    <textarea name="observaciones" id="observaciones" cols="50" rows="10"></textarea>
</p>
<p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</p>

</form>