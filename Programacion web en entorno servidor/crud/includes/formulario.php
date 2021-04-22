<p>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?php if (isset($result_fetch['nombre'])) echo $result_fetch['nombre'] ?>">
</p>
<p>
    <label for="login">Login</label>
    <input type="text" name="login" value="<?php if (isset($result_fetch['login'])) echo $result_fetch['login'] ?>">
</p>
<p>
    <label for="apellidos">apellidos</label>
    <input type="text" name="apellidos" value="<?php if (isset($result_fetch['apellidos'])) echo $result_fetch['apellidos'] ?>">
</p>
<p>
    <label for="email">email</label>
    <input type="text" name="email" value="<?php if (isset($result_fetch['email'])) echo $result_fetch['email'] ?>">
</p>
<p>
    <label for="password">Password</label>
    <input type="text" name="password" value="<?php if (isset($result_fetch['password'])) echo $result_fetch['password'] ?>">
</p>
<p>
    <label for="tipo">Tipo</label>
    <input type="text" name="tipo" value="<?php if (isset($result_fetch['tipo'])) echo $result_fetch['tipo'] ?>">
</p>
<p>
    <label for="fecha_nacimiento">fecha de nacimiento</label>
    <input type="text" name="fecha_nacimiento" value="<?php if (isset($result_fetch['fecha_nacimiento'])) echo $result_fetch['fecha_nacimiento'] ?>">
</p>
<p>
    <label for="num_tlf">Numero de telefono</label>
    <input type="text" name="num_tlf" value="<?php if (isset($result_fetch['num_tlf'])) echo $result_fetch['num_tlf'] ?>">
</p>
<p>
    <label for="rol">Rol</label>
    <input type="text" name="rol" value="<?php if (isset($result_fetch['rol'])) echo $result_fetch['rol'] ?>">
</p>
<p>
    <label for="fecha_alta">Fecha de alta</label>
    <input type="text" name="fecha_alta" value="<?php if (isset($result_fetch['fecha_alta'])) echo $result_fetch['fecha_alta'] ?>">
</p>
<p>
    <label for="estado">Estado</label>
    <input type="text" name="estado" value="<?php if (isset($result_fetch['estado'])) echo $result_fetch['estado'] ?>">
</p>
<p>
    <label for="token">Token</label>
    <input type="text" name="token" value="<?php if (isset($result_fetch['token'])) echo $result_fetch['token'] ?>">
</p>
<p>
    <label for="fecha_token">Fecha de token</label>
    <input type="text" name="fecha_token" value="<?php if (isset($result_fetch['fecha_token'])) echo $result_fetch['fecha_token'] ?>">
</p>
