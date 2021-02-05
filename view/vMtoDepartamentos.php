<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Mto Departamentos</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="mtoDepartamentos">Exportar</button>
        <button class="botonNav" name="editarPerfil">Importar</button>
        <button class="botonNav" name="cerrarSesion">Añadir</button>
    </form>
</nav>
<main class="mainMtoDepartamentos">
    <div id="busqueda">
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="Departamento" >Departamento: </label>
            <input class="campos" type="text" id="Departamento" name="Departamento" value="<?php echo $busquedaDepartamento ?>"><br><br>
            <input type="radio" id="BuscarCodDepartamento" name="BuscarDepartamento" value="BuscarCodDepartamento" <?php echo $criterioBusqueda == 'BuscarCodDepartamento' ? 'checked' : null; ?>>
            <label for="BuscarCodDepartamento">Buscar por código</label>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <input type="radio" id="BuscarDescDepartamento" name="BuscarDepartamento" value="BuscarDescDepartamento" <?php echo $criterioBusqueda == 'BuscarDescDepartamento' ? 'checked' : null; ?>>
            <label for="BuscarDescDepartamento">Buscar por descripción</label><br><br>
            <input class="enviar" type="submit" value="Buscar" name="Buscar">
        </form>
    </div>
    <div id="resultadoBusqueda">
    <?php 
        if(count($aDepartamentos)>0){
    ?>
        <form id="formularioCampos" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table>
                <thead>
                    <tr>
                        <th class="campoCod">Código</th>
                        <th class="campoDescripcion">Descripción</th>
                        <th>FechaCreación</th>
                        <th>FechaBaja</th>
                        <th>VolumenNegocio</th>
                        <th colspan="5"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($aDepartamentos as $numDepartamento => $oDepartamento) {
                            $codigoDepartamento = $oDepartamento->codDepartamento;
                    ?>
                            <tr>
                                <td class="campoCod"><?php echo $codigoDepartamento; ?></td>
                                <td class="campoDescripcion"><?php echo $oDepartamento->descDepartamento; ?></td>
                                <td><?php echo date('d/m/Y',$oDepartamento->fechaCreacionDepartamento); ?></td>
                                <td><?php echo $oDepartamento->fechaBajaDepartamento == null ? 'null' : date('d/m/Y',$oDepartamento->fechaBajaDepartamento); ?></td>
                                <td><?php echo $oDepartamento->volumenDeNegocio; ?></td>
                                <td><button type="submit" name="editar" value="<?php echo $codigoDepartamento; ?>"><img src="webroot/media/images/editar.png" alt="editar departamento" width="30px"></button></td>
                                <td><button type="submit" name="borrar" value="<?php echo $codigoDepartamento; ?>"><img src="webroot/media/images/borrar.png" alt="borrar departamento" width="30px"></button></td>
                                <td><button type="submit" name="bajaLogica" value="<?php echo $codigoDepartamento; ?>"><img src="webroot/media/images/baja.png" alt="baja logica departamento" width="30px"></button></td>
                                <td><button type="submit" name="rehabilitar" value="<?php echo $codigoDepartamento; ?>"><img src="webroot/media/images/rehabilitar.png" alt="rehabilitar departamento" width="30px"></button></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </form>
        <form id="formularioPaginacion" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table>
                <tr>
                    <td><button type="submit"><img src="webroot/media/images/pagInicial.png" alt="editar departamento" width="30px"></button></td>
                    <td><button type="submit"><img src="webroot/media/images/pagAnterior.png" alt="editar departamento" width="30px"></button></td>
                    <td>1 de 1</td>
                    <td><button type="submit"><img src="webroot/media/images/pagSiguiente.png" alt="editar departamento" width="30px"></button></td>
                    <td><button type="submit"><img src="webroot/media/images/pagFinal.png" alt="editar departamento" width="30px"></button></td>
                </tr>
            </table>
        </form>
        <?php 
        }else{
        ?>
                    <h4 style="color:red;">No se han encontrado registros</h4>
        <?php
        }
        ?>
    
    </div>
    <div id="volver">
        <form action="" method="post">
            <input class="enviar" type="submit" value="Volver" name="volver">
        </form>
    </div>
</main>