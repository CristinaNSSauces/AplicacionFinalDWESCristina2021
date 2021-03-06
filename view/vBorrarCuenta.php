<nav class="navInicio">
    <ul>
        <li id="logo">CNS</li>
        <li>Eliminar Cuenta</li>
    </ul>
    
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainEliminarCuenta">
    <div id="eliminarCuenta">
        <form name="formularioEliminarCuenta" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="formularioAlta">
            <h3>Eliminar Cuenta</h3>
            <br>
            <div>
                <h4>¿Está seguro de querer eliminar su cuenta?</h4>
                <h5><img src="webroot/media/images/atencion.png" width="15px">  Eliminará su cuenta y sus datos definitivamente</h5>
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