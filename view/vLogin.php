<nav>
    <ul>
        <li id="logo">CNS</li>
        <li>Login</li>
    </ul>
</nav>
<main>
    <div id="enlaces">
        <ul>
            <li><a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank">Ver catálogo de requisitos</a></li>
            <li><a href="doc/210102DiagramaDeCasosDeUso.pdf" target="_blank">Ver diagrama de casos de uso</a></li>
            <li><a href="doc/210102DiagramaDeClases.pdf" target="_blank">Ver diagrama de clases</a></li>
            <li><a href="doc/210102ArbolDeNavegación.pdf" target="_blank">Ver árbol de navegación</a></li>
            <li><a href="doc/210102RelacionDeFicheros.pdf" target="_blank">Ver mapa web - relación de ficheros</a></li>
            <li><a href="webroot/media/images/200113EstructuraDeAlmacenamiento.jpg" target="_blank">Ver estructura de almacenamiento</a></li>
            <li><a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank">Ver modelo fisico de datos</a></li>
        </ul>
    </div>
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
            </div>
            <?php 
                // phpinfo();
            ?>
        </form>
    </div>
</main>