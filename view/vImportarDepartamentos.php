<nav>
    <ul>
        <li id="logo">CNS</li>
        <li>Importar Departamentos</li>
    </ul>
</nav>
<main class="mainImportarDepartamentos">
    <div id="importarDepartamentos">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form" enctype="multipart/form-data">
            <h3>Importar Departamentos</h3>
            <br>
            <div>
                <label for="Archivo">Archivo</label><br>
                <input class="campos" type="file" id="Archivo" name="Archivo" value="">
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