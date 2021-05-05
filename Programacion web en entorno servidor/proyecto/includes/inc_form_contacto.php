<form class="ms-form-contacto" action="registro.php" method="post">
    <!-- Nombre -->
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <!-- Email -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <!-- Generos favoritos -->
    <label for="check_generos" class="form-label">Géneros favoritos</label>
    <div id="check_generos" class="ms-check-contacto ms-div-contacto">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="accion" name="genero[]" value="accion">
            <label class="form-check-label" for="exampleCheck1">Acción</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="aventura" name="genero[]" value="aventura">
            <label class="form-check-label" for="exampleCheck1">Aventura</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="ciencia_ficcion" name="genero[]" value="ciencia_ficcion">
            <label class="form-check-label" for="exampleCheck1">Ciendia Ficción</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="comedia" name="genero[]" value="comedia">
            <label class="form-check-label" for="exampleCheck1">Comedia</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="crimen" name="genero[]" value="crimen">
            <label class="form-check-label" for="exampleCheck1">Crimen</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="drama" name="genero[]" value="drama">
            <label class="form-check-label" for="exampleCheck1">Drama</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="fantasia" name="genero[]" value="fantasia">
            <label class="form-check-label" for="exampleCheck1">Fantasía</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="suspense" name="genero[]" value="suspense">
            <label class="form-check-label" for="exampleCheck1">Suspense</label>
        </div>
    </div>
    <!-- Experiencia con la página -->
    <label for="experiencia" class="form-label">Experiencia en la página</label>
    <div id="experiencia" class="ms-radios-contacto ms-div-contacto">
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault1" checked name="experiencia" value="muybuena">
            <label class="form-check-label" for="flexRadioDefault1">
                Muy Buena
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio"  id="flexRadioDefault2" name="experiencia" value="buena">
            <label class="form-check-label" for="flexRadioDefault2">
                Buena
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="experiencia" value="regular">
            <label class="form-check-label" for="flexRadioDefault2">
                Regular
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="experiencia" value="mala">
            <label class="form-check-label" for="flexRadioDefault2">
                Mala
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="experiencia" value="muymala">
            <label class="form-check-label" for="flexRadioDefault2">
                Muy Mala
            </label>
        </div>
    </div>
    <!-- Notificaciones -->
    <label for="check_notifi" class="form-label">Te gustaría recibir notificaciones de: </label>
    <div id="check_notifi" class="ms-check-contacto ms-div-contacto">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="notificaciones" value="estrenos">
            <label class="form-check-label" for="exampleCheck1">Estrenos</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="notificaciones" value="promociones">
            <label class="form-check-label" for="exampleCheck1">Promociones</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="notificaciones" value="noticias">
            <label class="form-check-label" for="exampleCheck1">Noticias</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="notificaciones" value="preventas">
            <label class="form-check-label" for="exampleCheck1">Preventas</label>
        </div>
    </div>
    <!-- Textarea -->
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height:100px;" name="comentario"></textarea>
        <label for="floatingTextarea">Comentarios</label>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top:50px;">Enviar</button>
</form>