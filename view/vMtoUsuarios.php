<nav class="navInicio">
    <ul>
        <li id="logo">CNS</li>
        <li>Mantenimiento de Usuarios</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainMtoUsuarios">
    <form class="busquedaUsuario">
        <label for="Usuario">Usuario: </label>
        <input class="campos" type="text" id="Usuario" name="Usuario">
    </form>
    <div>
        <div class="formUsuarios">
            <table class="usuarios">
                <thead>
                    <tr>
                        <th>Codigo de usuario</th>
                        <th>Descripcion de usuario</th>
                        <th>Numero de conexiones</th>
                        <th>Fecha última conexion</th>
                    </tr>
                </thead>
                <tbody id="tabla">

                </tbody>
            </table>
        </div>
    </div>
    

    <form action="" method="post" class="formVolver">
        <input class="enviar" type="submit" value="Volver" name="volver">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="webroot/js/scriptMtoUsuarios.js"></script>
</main>

