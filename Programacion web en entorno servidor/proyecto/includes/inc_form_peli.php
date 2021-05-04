<div id="ms-form-peli">
    <div class="mb-3 ms-peli-input">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php if(isset($_REQUEST[''])){} ?>">
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="duracion" class="form-label">Duracion</label>
        <input type="number" class="form-control" id="duracion" name="duracion">
    </div>

    <div class="mb-3 ms-peli-input">
        <label for="clasificacion" class="form-label">Clasificacion</label>
        <select name="clasificacion" class="form-select ms-peli-input" aria-label="Default select example">
            <option value="A" selected>Todos los públicos</option>
            <option value="7">7</option>
            <option value="12">12</option>
            <option value="16">16</option>
            <option value="18">18</option>
        </select>
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="clasificacion" class="form-label">Estado</label>
        <select class="form-select ms-peli-input" aria-label="Default select example">
            <option value="A" selected>Activa</option>
            <option value="I">Inactiva</option>
        </select>
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="fecha_estreno" class="form-label">Fecha de estreno</label>
        <input type="date" class="form-control" id="fecha" name="fecha_estreno">
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="clasificacion" class="form-label">Género</label>
        <select class="form-select ms-peli-input" aria-label="Default select example">
            <option value="accion" selected>Acción</option>
            <option value="aventura">Aventura</option>
            <option value="cifi">Ciencia Ficción</option>
            <option value="comedia">Comedia</option>
            <option value="comedia">Crimen</option>
            <option value="drama">Drama</option>
            <option value="fantasia">Fantasía</option>
            <option value="suspense">Suspense</option>
        </select>
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="poster" class="form-label">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster">
    </div>
</div>
<button style="margin-left:110px;" type="submit" class="btn btn-primary">Continuar</button>