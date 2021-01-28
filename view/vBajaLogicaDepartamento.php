<nav>
    <ul>
        <li id="logo">CNS</li>
        <li>Baja Lógica Departamento</li>
    </ul>
</nav>
<main class="mainBajaLogicaDepartamento">
    <div id="bajaLogicaDepartamento">
        <form name="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form">
            <h3>Baja Lógica Departamento</h3>
            <br>
            <h4>Campos bloqueados (*)</h4>
            <h5><img src="images/atencion.png" width="15px">  Darás de baja el departamento</h5>
            <br>
            <div>
                <label for="CodDepartamento">Código de departamento (*)</label><br>
                <input class="codigoDep" type="text" id="CodDepartamento" name="CodDepartamento" readonly value="">
                <br><br>

                <label for="DescDepartamento" >Descripción de departamento (*)</label><br>
                <input class="campos" type="text" id="DescDepartamento" name="DescDepartamento" readonly value="">
                <br><br>

                <label for="FechaCreacion">Fecha de creación (*)</label><br>
                <input class="fechaDep" type="text" id="FechaCreacion" name="FechaCreacion" readonly value="">
                <br><br>

                <label for="FechaBaja">Fecha de baja</label><br>
                <input class="fechaDep" type="date" id="FechaBaja" name="FechaBaja" value="">
                <br><br>

                <label for="VolumenNegocio">Volumen de negocio(*)</label><br>
                <input class="vNegocio" type="text" id="FechaHoraUltimaConexion" name="FechaHoraUltimaConexion" readonly value="">
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