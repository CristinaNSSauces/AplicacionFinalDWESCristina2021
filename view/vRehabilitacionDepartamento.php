<nav>
    <ul>
        <li id="logo">CNS</li>
        <li>Rehabilitar Departamento</li>
    </ul>
</nav>
<main class="mainRehabilitarDepartamento">
    <div id="rehabilitarDepartamento">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form">
            <h3>Rehabilitar Departamento</h3>
            <br>
<<<<<<< HEAD
            <h5><img src="webroot/media/images/atencion.png" width="15px">  Rehabilitarás el departamento</h5>
            <br>
            <div>
                <label for="CodDepartamento">Código de departamento</label><br>
                <input style="background-color: #f5f5f5;" class="codigoDep" type="text" id="CodDepartamento" name="CodDepartamento" readonly value="<?php echo $oDepartamento->codDepartamento; ?>">
                <br><br>

                <label for="DescDepartamento" >Descripción de departamento</label><br>
                <input style="background-color: #f5f5f5;" class="campos" type="text" id="DescDepartamento" name="DescDepartamento" readonly value="<?php echo $oDepartamento->descDepartamento; ?>">
                <br><br>

                <label for="FechaCreacion">Fecha de creación</label><br>
                <input style="background-color: #f5f5f5;" class="fechaDep" type="text" id="FechaCreacion" name="FechaCreacion" readonly value="<?php echo date('d/m/Y',$oDepartamento->fechaCreacionDepartamento); ?>">
                <br><br>

                <label for="FechaBaja">Fecha de baja</label><br>
                <input style="background-color: #f5f5f5;" class="fechaDep" type="text" id="FechaBaja" name="FechaBaja" readonly value="null">
                <br><br>

                <label for="VolumenNegocio">Volumen de negocio</label><br>
                <input style="background-color: #f5f5f5;" class="vNegocio" type="text" id="VolumenNegocio" name="VolumenNegocio" readonly value="<?php echo $oDepartamento->volumenDeNegocio; ?>">
=======
            <h4>Campos bloqueados (*)</h4>
            <h5><img src="webroot/media/images/atencion.png" width="15px">  Rehabilitarás el departamento</h5>
            <br>
            <div>
                <label for="CodDepartamento">Código de departamento (*)</label><br>
                <input class="codigoDep" type="text" id="CodDepartamento" name="CodDepartamento" readonly value="<?php echo $oDepartamento->codDepartamento; ?>">
                <br><br>

                <label for="DescDepartamento" >Descripción de departamento (*)</label><br>
                <input class="campos" type="text" id="DescDepartamento" name="DescDepartamento" readonly value="<?php echo $oDepartamento->descDepartamento; ?>">
                <br><br>

                <label for="FechaCreacion">Fecha de creación (*)</label><br>
                <input class="fechaDep" type="text" id="FechaCreacion" name="FechaCreacion" readonly value="<?php echo date('d/m/Y',$oDepartamento->fechaCreacionDepartamento); ?>">
                <br><br>

                <label for="FechaBaja">Fecha de baja (*)</label><br>
                <input class="fechaDep" type="text" id="FechaBaja" name="FechaBaja" readonly value="null">
                <br><br>

                <label for="VolumenNegocio">Volumen de negocio(*)</label><br>
                <input class="vNegocio" type="text" id="VolumenNegocio" name="VolumenNegocio" readonly value="<?php echo $oDepartamento->volumenDeNegocio; ?>">
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
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