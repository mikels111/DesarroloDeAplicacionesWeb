<form class="ms-form-contacto">
    <!-- Nombre -->
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre">
    </div>
    <!-- Email -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <!-- Generos favoritos -->
    <label for="check_generos" class="form-label">Géneros favoritos</label>
    <div id="check_generos" class="ms-check-contacto ms-div-contacto">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="accion">
            <label class="form-check-label" for="exampleCheck1">Acción</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="aventura">
            <label class="form-check-label" for="exampleCheck1">Aventura</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="ciencia_ficcion">
            <label class="form-check-label" for="exampleCheck1">Ciendia Ficción</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="comedia">
            <label class="form-check-label" for="exampleCheck1">Comedia</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="crimen">
            <label class="form-check-label" for="exampleCheck1">Crimen</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="drama">
            <label class="form-check-label" for="exampleCheck1">Drama</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="fantasia">
            <label class="form-check-label" for="exampleCheck1">Fantasía</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="suspense">
            <label class="form-check-label" for="exampleCheck1">Suspense</label>
        </div>
    </div>
    <!-- Experiencia con la página -->
    <label for="experiencia" class="form-label">Experiencia en la página</label>
    <div id="experiencia" class="ms-radios-contacto ms-div-contacto">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experiencia_usuario" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                Muy Buena
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experiencia_usuario" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Buena
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experiencia_usuario" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Regular
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experiencia_usuario" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Mala
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experiencia_usuario" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Muy Mala
            </label>
        </div>
    </div>
    <!-- Notificaciones -->
    <label for="check_notifi" class="form-label">Te gustaría recibir notificaciones de: </label>
    <div id="check_notifi" class="ms-check-contacto ms-div-contacto">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Estrenos</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Promociones</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Noticias</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Estrenos</label>
        </div>
    </div>
    <!-- Textarea -->
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height:100px;"></textarea>
        <label for="floatingTextarea">Comentarios</label>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top:50px;">Enviar</button>
</form>