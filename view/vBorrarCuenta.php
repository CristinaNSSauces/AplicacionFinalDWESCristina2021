<nav>
    <ul>
        <li id="logo">CNS</li>
        <li>Eliminar Cuenta</li>
    </ul>
</nav>
<main class="mainEliminarCuenta">
    <div id="eliminarCuenta">
        <form name="formularioEliminarCuenta" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="formularioAlta">
            <h3>Eliminar Cuenta</h3>
            <br>
            <div>
                <h4>¿Está seguro de querer eliminar su cuenta?</h4>
                <h5>Eliminará su cuenta y sus datos definitivamente</h5>
                <br>
                <label for="Password">Contraseña</label><br>
                <input class="campos" type="password" id="Password" name="Password" value="">
                <br><br>
            </div>
            <div>
                <input class="eliminarCuenta" type="submit" value="EliminarCuenta" name="EliminarCuenta">
                <br><br>
                <input class="enviar" type="submit" value="Cancelar" name="Cancelar">
            </div>
        </form>
    </div>
</main>