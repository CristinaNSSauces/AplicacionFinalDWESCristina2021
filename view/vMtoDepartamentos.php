<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Mto Departamentos</li>
    </ul>
    <form class="forNavInicio" action="#" method="post">
        <button class="botonNav" name="mtoDepartamentos">Exportar</button>
        <button class="botonNav" name="editarPerfil">Importar</button>
        <button class="botonNav" name="cerrarSesion">Añadir</button>
    </form>
</nav>
<main class="mainMtoDepartamentos">
    <div id="busqueda">
        <br>
        <form action="">
            <label for="Departamento" >Departamento: </label>
            <input class="campos" type="text" id="Departamento" name="Departamento" value=""><br><br>
            <input type="radio" id="BuscarCodDepartamento" name="BuscarDepartamento" value="BuscarCodDepartamento">
            <label for="BuscarCodDepartamento">Buscar por código</label>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <input type="radio" id="BuscarDescDepartamento" name="BuscarDepartamento" value="BuscarDescDepartamento" checked>
            <label for="BuscarDescDepartamento">Buscar por descripción</label><br><br>
            <input class="enviar" type="submit" value="Buscar" name="Buscar">
        </form>
    </div>
    <div id="resultadoBusqueda">
        <form id="formularioCampos" action="" method="post">
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
                    <tr>
                        <td class="campoCod">CON</td>
                        <td class="campoDescripcion">Departamento de contabilidad</td>
                        <td>10-12-2020</td>
                        <td>null</td>
                        <td>9</td>
                        <td><button type="submit"><img src="images/editar.png" alt="editar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/borrar.png" alt="borrar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/baja.png" alt="baja logica departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/rehabilitar.png" alt="rehabilitar departamento" width="30px"></button></td>
                    </tr>
                    <tr>
                        <td class="campoCod">CON</td>
                        <td class="campoDescripcion">Departamento de contabilidad</td>
                        <td>10-12-2020</td>
                        <td>null</td>
                        <td>9</td>
                        <td><button type="submit"><img src="images/editar.png" alt="editar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/borrar.png" alt="borrar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/baja.png" alt="baja logica departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/rehabilitar.png" alt="rehabilitar departamento" width="30px"></button></td>
                    </tr>

                    <tr>
                        <td class="campoCod">CON</td>
                        <td class="campoDescripcion">Departamento de contabilidad</td>
                        <td>10-12-2020</td>
                        <td>null</td>
                        <td>9</td>
                        <td><button type="submit"><img src="images/editar.png" alt="editar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/borrar.png" alt="borrar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/baja.png" alt="baja logica departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/rehabilitar.png" alt="rehabilitar departamento" width="30px"></button></td>
                    </tr>

                    <tr>
                        <td class="campoCod">CON</td>
                        <td class="campoDescripcion">Departamento de contabilidad</td>
                        <td>10-12-2020</td>
                        <td>null</td>
                        <td>9</td>
                        <td><button type="submit"><img src="images/editar.png" alt="editar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/borrar.png" alt="borrar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/baja.png" alt="baja logica departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/rehabilitar.png" alt="rehabilitar departamento" width="30px"></button></td>
                    </tr>

                    <tr>
                        <td class="campoCod">CON</td>
                        <td class="campoDescripcion">Departamento de contabilidad</td>
                        <td>10-12-2020</td>
                        <td>null</td>
                        <td>9</td>
                        <td><button type="submit"><img src="images/editar.png" alt="editar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/borrar.png" alt="borrar departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/baja.png" alt="baja logica departamento" width="30px"></button></td>
                        <td><button type="submit"><img src="images/rehabilitar.png" alt="rehabilitar departamento" width="30px"></button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <form id="formularioPaginacion" action="" method="post">
            <table>
                <tr>
                    <td><button type="submit"><img src="images/pagInicial.png" alt="editar departamento" width="30px"></button></td>
                    <td><button type="submit"><img src="images/pagAnterior.png" alt="editar departamento" width="30px"></button></td>
                    <td>1 de 1</td>
                    <td><button type="submit"><img src="images/pagSiguiente.png" alt="editar departamento" width="30px"></button></td>
                    <td><button type="submit"><img src="images/pagFinal.png" alt="editar departamento" width="30px"></button></td>
                </tr>
            </table>
        </form>
    </div>
    <div id="volver">
        <form action="" method="post">
            <input class="enviar" type="submit" value="Volver" name="Volver">
        </form>
    </div>
</main>