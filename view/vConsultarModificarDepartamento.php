<nav class="navInicio">
    <ul>
        <li id="logo">CNS</li>
        <li>Consultar/Editar Departamento</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="cerrarSesion">Cerrar Sesión</button>
    </form>
</nav>
<main class="mainConsultarEditarDepartamento">
    <div id="consultarEditarDepartamento">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form">
            <h3>Consultar/Editar Departamento</h3>
            <br>
            <div>
<<<<<<< HEAD
                <label for="CodDepartamento">Código de departamento</label><br>
                <input style="background-color: #f5f5f5;" class="codigoDep" type="text" id="CodDepartamento" name="CodDepartamento" readonly value="<?php echo $oDepartamento->codDepartamento; ?>">
=======
                <label for="CodDepartamento">Código de departamento (*)</label><br>
                <input class="codigoDep" type="text" id="CodDepartamento" name="CodDepartamento" readonly value="<?php echo $oDepartamento->codDepartamento; ?>">
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
                <br><br>

                <label for="DescDepartamento" >Descripción de departamento</label><br>
                <input class="campos" type="text" id="DescDepartamento" name="DescDepartamento" value="<?php echo isset($_REQUEST['CodUsuario']) ? $_REQUEST['CodUsuario'] : $oDepartamento->descDepartamento; ?>">
                <?php echo isset($aErrores['DescDepartamento']) ? '<p style="color: red;">'. $aErrores['DescDepartamento'].'</p>' : null; ?>
                <br><br>

<<<<<<< HEAD
                <label for="FechaCreacion">Fecha de creación</label><br>
                <input style="background-color: #f5f5f5;" class="fechaDep" type="text" id="FechaCreacion" name="FechaCreacion" readonly value="<?php echo date('d/m/Y',$oDepartamento->fechaCreacionDepartamento); ?>">
                <br><br>

                <label for="FechaBaja">Fecha de baja</label><br>
                <input style="background-color: #f5f5f5;" class="fechaDep" type="text" id="FechaBaja" name="FechaBaja" readonly value="<?php echo isset($oDepartamento->fechaBajaDepartamento) ? date('d/m/Y',$oDepartamento->fechaBajaDepartamento) : "null"; ?>">
=======
                <label for="FechaCreacion">Fecha de creación (*)</label><br>
                <input class="fechaDep" type="text" id="FechaCreacion" name="FechaCreacion" readonly value="<?php echo date('d/m/Y',$oDepartamento->fechaCreacionDepartamento); ?>">
                <br><br>

                <label for="FechaBaja">Fecha de baja (*)</label><br>
                <input class="fechaDep" type="text" id="FechaBaja" name="FechaBaja" readonly value="<?php echo isset($oDepartamento->fechaBajaDepartamento) ? date('d/m/Y',$oDepartamento->fechaBajaDepartamento) : "null"; ?>">
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
                <br><br>

                <label for="VolumenNegocio">Volumen de negocio</label><br>
                <input class="vNegocio" type="text" id="VolumenNegocio" name="VolumenNegocio" value="<?php echo isset($_REQUEST['CodUsuario']) ? $_REQUEST['CodUsuario'] : $oDepartamento->volumenDeNegocio; ?>">
                <?php echo isset($aErrores['VolumenNegocio']) ? '<p style="color: red;">'. $aErrores['VolumenNegocio'].'</p>' : null; ?>
                <br><br>
            </div>
            <div>
                <input class="enviar" type="submit" value="Aceptar" name="Aceptar">
                <br>
                <input class="enviar" type="submit" value="Cancelar" name="Cancelar">
            </div>
        </form>
    </div>
</main>