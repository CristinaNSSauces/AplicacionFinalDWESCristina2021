<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Mto Departamentos</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button class="botonNav" name="exportar">Exportar</button>
        <button class="botonNav" name="importar">Importar</button>
        <button class="botonNav" name="añadir">Añadir</button>
    </form>
</nav>
<main class="mainMtoDepartamentos">
    <div id="busqueda">
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="Departamento" >Departamento: </label>
            <input class="campos" type="text" id="Departamento" name="Departamento" value="<?php echo $busquedaDepartamento ?>">
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
                            $fechaBaja = $oDepartamento->fechaBajaDepartamento;
                            if(isset($fechaBaja)){
                                $colorTexto = "#F53D3D";
                            }else{
                                $colorTexto = "#2CD000";
                            }
                    ?>
                            <tr style="color: <?php echo $colorTexto ?>;">
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
                    <td><button <?php echo ($paginaActual==1 ? "hidden" : null);?> type="submit" value="1" name="paginaInicial"><img src="webroot/media/images/pagInicial.png" alt="editar departamento" width="30px"></button></td>
                    <td><button <?php echo ($paginaActual==1 ? "hidden" : null);?> type="submit" value="<?php echo $paginaActual-1; ?>" name="retrocederPagina"><img src="webroot/media/images/pagAnterior.png" alt="editar departamento" width="30px"></button></td>
                    <td><?php echo $paginaActual." de ".$paginasTotales; ?></td>
                    <td><button <?php echo ($paginaActual>=$paginasTotales ? "hidden" : null);?> type="submit" value="<?php echo $paginaActual+1; ?>" name="avanzarPagina"><img src="webroot/media/images/pagSiguiente.png" alt="editar departamento" width="30px"></button></td>
                    <td><button <?php echo ($paginaActual>=$paginasTotales ? "hidden" : null);?> type="submit" value="<?php echo $paginasTotales ?>" name="paginaFinal"><img src="webroot/media/images/pagFinal.png" alt="editar departamento" width="30px"></button></td>
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