<<<<<<< HEAD
<nav class="navInicio">
=======
<nav>
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
    <ul>
        <li id="logo">CNS</li>
        <li>Exportar Departamentos</li>
    </ul>
<<<<<<< HEAD
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
=======
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
</nav>
<main class="mainImportarDepartamentos">
    <div id="importarDepartamentos">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form" enctype="multipart/form-data">
            <h3>Exportar Departamentos</h3>
            <br>
            <div>
                <label for="Archivo">Tipo archivo:</label><br>
                <select class="campos" name="Archivo" id="Archivo">
                    <option value="xml">XML</option>
                    <option value="json">JSON</option>
                </select>
                <?php echo isset($errorArchivo) ? '<p style="color: red;">'. $errorArchivo.'</p>' : null; ?>
                <br><br>
            </div>
            <div>
                <input class="enviar" type="submit" value="Exportar" name="Aceptar">
                <br>
                <input class="enviar" type="submit" value="Cancelar" name="Cancelar">
            </div>
        </form>
    </div>
</main>