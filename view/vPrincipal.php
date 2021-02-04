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
            <a href="doc/210130DiagramaDeClases.pdf" target="_blank">
                <img src="webroot/media/images/imagen2.JPG" style="width:100%">
                <div class="text">Diagrama de clases</div>
            </a>
        </div>

        <div class="mySlides fade">
            <a href="doc/210130DiagramaDeCasosDeUso.pdf" target="_blank">
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
</main>