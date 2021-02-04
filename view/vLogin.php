<nav>
    <ul>
        <li id="logo">CNS</li>
        <li>Login</li>
    </ul>
</nav>
<main>
    <div id="inicioSesion">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h3>Inicia sesión</h3>
            <br>
            <div>
                <label for="CodUsuario">Usuario</label>
                <input class="campos" type="text" id="CodUsuario" name="CodUsuario" value="">
                <br><br>

                <label for="Password">Contraseña</label>
                <input class="campos" type="password" id="Password" name="Password" value="">
                <br><br>
            </div>
            <div>
                <input class="enviar" type="submit" value="Iniciar Sesion" name="IniciarSesion">
                <br><br>
                <input class="enviar" type="submit" value="Registrarse" name="Registrarse">
                <br><br>
                <input class="volver" type="submit" value="Volver" name="Volver">
            </div>
        </form>
    </div>
</main>