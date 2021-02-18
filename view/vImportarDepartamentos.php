<nav class="navInicio">
    <ul>
        <li id="logo">CNS</li>
        <li>Importar Departamentos</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainImportarDepartamentos">
    <div id="importarDepartamentos">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form" enctype="multipart/form-data">
            <h3>Importar Departamentos</h3>
            <br>
            <div>
                <label for="Archivo">Archivo</label><br>
                <input class="campos" type="file" id="Archivo" name="Archivo" value="">
                <?php echo isset($errorArchivo) ? '<p style="color: red;">'. $errorArchivo.'</p>' : null; ?>
                <br>
                
                <label for="Archivo">Tipo archivo:</label><br>
                <select class="campos" name="Tipo" id="Tipo">
                    <option value="xml">XML</option>
                    <option value="json">JSON</option>
                </select>
                <br><br>
            </div>
            <div>
                <input class="enviar" type="submit" value="Importar" name="Aceptar">
                <br>
                <input class="enviar" type="submit" value="Cancelar" name="Cancelar">
            </div>
        </form>
    </div>
</main>