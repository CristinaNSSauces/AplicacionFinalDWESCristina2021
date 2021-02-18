<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>AplicacionFinal</title>

            <link rel="stylesheet" href="webroot/css/estilo.css">
<<<<<<< HEAD
            <script src="webroot/js/validarRegistro.js"></script>
            <link rel="stylesheet" href="webroot/css/estiloMtoUsuarios.css">
=======
            <script src="webroot/js/script.js"></script>
            <script src="webroot/js/validarRegistro.js"></script>
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
        </head>
        <body>

            <?php require_once $vistaEnCurso ?>

        <footer>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table>
                <tr>
                    <td><button type="submit" name="Tecnologias" class="tecnologias">Ver tecnologías y herramientas utilizadas</button></td>
                    <td><a href="webroot/rss/rss.xml" target="_blank">Ver RSS O Atom</a></td>
                    <td><a href="https://github.com/CristinaNSSauces" target="_blank">Ir a la web del repositorio</a></td>
                </tr>
                <tr>
                    <td><a href="doc/phpDocumentor/index.html" target="_blank">Ir a la web del PHP Doc</a></td>
                    <td><a href="http://daw215.ieslossauces.es/" target="_blank">Ir a la web del Autor</a></td>
                    <td><a href="doc/CV.pdf" target="_blank">Ver curriculo del Autor</a></td>
                </tr>
                <tr>
                    <td><a href="https://www.apple.com/es/" target="_blank">Ir a la web del Imitada por el alumno</a></td>
                    <td><a href="doc/doxygen/html/index.html" target="_blank">Documentación Doxygen</a></td>
                    <td class="derechos">Copyright &copy; 2021 Cristina Núñez Sebastián</td>
                </tr>
            </table>
        </form>
        </footer>
    </body>
</html>