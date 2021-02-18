<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Tecnologías</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainVtecnologias">
    <table>
        <tr>
            <td class="imagenTecnologia">
                <img src="webroot/media/images/php.png" alt="php">
            </td>

            <td class="imagenTecnologia">
                <img src="webroot/media/images/JavaScript.png" alt="JavaScript">
            </td>

            <td class="imagenTecnologia">
                <img src="webroot/media/images/MySQL.png" alt="MySQL">
            </td>
        </tr>
        <tr>
            <td class="imagenTecnologia">
                <img src="webroot/media/images/html5.svg" alt="html5">
            </td>
            <td></td>
            <td class="imagenTecnologia">
                <img src="webroot/media/images/css.png" alt="css">
            </td>
        </tr>
    </table>
    <form action="" method="post" class="formVolver">
        <input class="enviar" type="submit" value="Volver" name="volver">
    </form>
</main>