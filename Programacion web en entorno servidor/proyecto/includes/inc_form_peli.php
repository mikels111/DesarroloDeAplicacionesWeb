<div id="ms-form-peli">
    <div class="mb-3 ms-peli-input">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php if (isset($titulo_original)) {
                                                                                        echo $titulo_original;
                                                                                    } ?>">
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="duracion" class="form-label">Duracion</label>
        <input type="number" class="form-control" id="duracion" name="duracion" value="<?php if (isset($duracion)) {
                                                                                            echo $duracion;
                                                                                        } ?>">
    </div>

    <div class="mb-3 ms-peli-input">
        <label for="clasificacion" class="form-label">Clasificacion</label>
        <select name="clasificacion" class="form-select ms-peli-input" aria-label="Default select example">
            <option value="" <?php if (!isset($clasificacion)) echo 'selected'; ?>></option>
            <option value="A" <?php if (isset($clasificacion) and $clasificacion == 'A') echo 'selected'; ?>>A</option>
            <option value="7" <?php if (isset($clasificacion) and $clasificacion == '7') echo 'selected' ?>>7</option>
            <option value="12" <?php if (isset($clasificacion) and $clasificacion == '12') echo 'selected' ?>>12</option>
            <option value="16" <?php if (isset($clasificacion) and $clasificacion == '16') echo 'selected' ?>>16</option>
            <option value="18" <?php if (isset($clasificacion) and $clasificacion == '18') echo 'selected' ?>>18</option>
        </select>
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="clasificacion" class="form-label">Estado</label>
        <select name="estado" class="form-select ms-peli-input" aria-label="Default select example">
            <option value="" <?php if (!isset($estado)) echo 'selected'; ?>></option>
            <option value="A" <?php if (isset($estado) and $estado == 'A') echo 'selected'; ?>>Activa</option>
            <option value="I" <?php if (isset($estado) and $estado == 'I') echo 'selected'; ?>>Inactiva</option>
        </select>
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="fecha_estreno" class="form-label">Fecha de estreno</label>
        <input type="date" class="form-control" id="fecha" name="fecha_estreno" value="<?php if (isset($fecha_estreno)) echo $fecha_estreno; ?>">
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="clasificacion" class="form-label">Género</label>
        <select name="genero" class="form-select ms-peli-input" aria-label="Default select example">
            <option value="" <?php if (!isset($genero)) echo 'selected'; ?>></option>
            <option value="Accion" <?php if (isset($genero) and $genero == "Accion") echo 'selected'; ?>>Acción</option>
            <option value="Aventura" <?php if (isset($genero) and $genero == "Aventura") echo 'selected'; ?>>Aventura</option>
            <option value="Ciencia ficción" <?php if (isset($genero) and $genero == "Ciencia ficción") echo 'selected'; ?>>Ciencia Ficción</option>
            <option value="Comedia" <?php if (isset($genero) and $genero == "Comedia") echo 'selected'; ?>>Comedia</option>
            <option value="Crimen" <?php if (isset($genero) and $genero == "Crimen") echo 'selected'; ?>>Crimen</option>
            <option value="Drama" <?php if (isset($genero) and $genero == "Drama") echo 'selected'; ?>>Drama</option>
            <option value="Fantasía" <?php if (isset($genero) and $genero == "Fantasía") echo 'selected'; ?>>Fantasía</option>
            <option value="Suspense" <?php if (isset($genero) and $genero == "Suspense") echo 'selected'; ?>>Suspense</option>
        </select>
    </div>
    <div class="mb-3 ms-peli-input">
        <label for="poster" class="form-label">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster" value="<?php if (isset($poster)) echo $poster; ?>">
    </div>
    <div class="form-floating ms-peli-input">
        <textarea style="height: 200px" class="form-control" placeholder="Horarios" id="floatingTextarea" name="horarios" rows="60"><?php if(isset($horarios)) echo $horarios; ?></textarea>
        <label for="floatingTextarea">Horarios</label>
    </div>
</div>
<button style="margin-left:110px;" type="submit" class="btn btn-primary">Continuar</button>