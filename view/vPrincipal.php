<?php 
    if(!isset($_COOKIE['aceptarPolitica'])){
?>
    <div class="ventana-cookie" id="ventana-cookie">
        <div class="content">
            <div class="content-text">Este sitio utiliza cookies para obtener la mejor experiencia en nuestra web.
                <div class="content-buttons">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="submit"id="boton-cerrar" name="aceptar" value="aceptar">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
    }
?>

<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Bienvenido</li>
    </ul>
    <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button class="botonNav" name="inicioSesion">Iniciar Sesión</button>
    </form>
</nav>
<main class="mainPrincipal">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <a href="doc/210130RelacionDeFicheros.pdf" target="_blank">
                <img src="webroot/media/images/imagen0.JPG" style="width:100%;">
                <div class="text">Relación de ficheros</div>
            </a>
        </div>

        <div class="mySlides fade">
<<<<<<< HEAD
            <a href="webroot/media/images/20210218_DiagramaDeClases.svg" target="_blank">
                <img src="webroot/media/images/20210218_DiagramaDeClases.svg" style="width:100%">
=======
            <a href="doc/DiagramaDeClases.pdf" target="_blank">
                <img src="webroot/media/images/DiagramaDeClases2021.svg" style="width:100%">
>>>>>>> b947ea14ab740f29ff0ea6163026cb43596f7140
                <div class="text">Diagrama de clases</div>
            </a>
        </div>

        <div class="mySlides fade">
            <a href="doc/210216DiagramaDeCasosDeUso.pdf" target="_blank">
                <img src="webroot/media/images/imagen3.JPG" style="width:100%">
                <div class="text">Diagrama de casos de uso</div>
            </a>
        </div>

        <div class="mySlides fade">
            <a href="doc/210130ArbolDeNavegacion.pdf" target="_blank">
                <img src="webroot/media/images/imagen4.JPG" style="width:100%">
                <div class="text">Árbol de navegación</div>
            </a>

        </div>

        <div class="mySlides fade">
            <a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank">
                <img src="webroot/media/images/imagen5.JPG" style="width:100%">
                <div class="text">Catalogo de requisitos</div>
            </a>

        </div>

        <div class="mySlides fade">
            <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank">
                <img src="webroot/media/images/imagen6.JPG" style="width:100%">
                <div class="text">Modelo fisico de datos</div>
            </a>

        </div>

        <div class="mySlides fade">
            <a href="webroot/media/images/200113EstructuraDeAlmacenamiento.jpg" target="_blank">
                <img src="webroot/media/images/imagen7.JPG" style="width:100%;">
                <div class="text">Estructura de almacenamiento</div>
            </a>

        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
    </div>
    
    <script src="webroot/js/script.js"></script>
</main>