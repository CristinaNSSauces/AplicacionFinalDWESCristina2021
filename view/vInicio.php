<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Inicio</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="rest">Rest</button>
        <button class="botonNav" name="mtoDepartamentos">Mto Departamentos</button>
        <button class="botonNav" name="editarPerfil">Editar Perfil</button>
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainInicio">
    <div id="imagen">
        <?php
            if(isset($oUsuarioActual->imagenPerfil)){
                echo '<img style="margin-rigth: 2px;" src = "data:image/png;base64,' . base64_encode($oUsuarioActual->imagenPerfil) . '" width = "100px"/>';
            }
        ?>
    </div>
    <div id="inicio">
        <h1>Bienvenido/a <?php echo $oUsuarioActual->descUsuario?></h1>
        <p><?php echo ($oUsuarioActual->numConexiones > 1) ? "Esta es la ".$oUsuarioActual->numConexiones." vez que se conecta" : "Es la primera vez que se conecta" ?></p>
        <p><?php echo isset($ultimaConexion) ? "Se conectó por última vez el ".date('d/m/Y',$ultimaConexion)." a las ".date('H:i:s',$ultimaConexion) : null; ?> </p>
    </div>
</main>