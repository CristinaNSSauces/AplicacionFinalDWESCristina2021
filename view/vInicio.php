<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Inicio</li>
    </ul>
    <form class="forNavInicio" action="" method="post">
        <button class="botonNav" name="rest">Rest</button>
        <button class="botonNav" name="mtoDepartamentos">Mto Departamentos</button>
        <button class="botonNav" name="editarPerfil">Editar Perfil</button>
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainInicio">
    <div id="imagen">
        <?php
            if($oUsuarioActual->imagenPerfil!=null){
                echo '<img style="margin-rigth: 2px;" src = "data:image/png;base64,' . base64_encode($oUsuarioActual->imagenPerfil) . '" width = "100px"/>';
            }
        ?>
    </div>
    <div id="inicio">
        <h1>Bienvenido/a <?php echo $descUsuario?></h1>
        <p><?php echo ($numConexiones > 1) ? "Número de conexiones: ".$numConexiones: "Es la primera vez que se conecta" ?></p>
        <p><?php echo ($ultimaConexion != null) ? "Fecha Hora última conexión: ".date('d/m/Y H:i:s',$ultimaConexion) : null; ?> </p>
    </div>
</main>