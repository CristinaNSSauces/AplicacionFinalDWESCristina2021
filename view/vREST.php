<nav class="navInicio">
    <ul class="logoInicio">
        <li id="logo">CNS</li>
        <li>Rest</li>
    </ul>
</nav>
<main class="mainRest">
    <div id="inicio">
        <h1>Rest</h1>
        <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h3>Obtener los centros de día más cercanos de un distrito de Madrid</h3>
        <a href="https://datos.madrid.es/portal/site/egob/menuitem.214413fe61bdd68a53318ba0a8a409a0/?vgnextoid=b07e0f7c5ff9e510VgnVCM1000008a4a900aRCRD&vgnextchannel=b07e0f7c5ff9e510VgnVCM1000008a4a900aRCRD&vgnextfmt=default">Información sobre la api</a>
            <br>
            <label for="centrosDeDia">Seleccione un distrito para obtener información sobre los centros de día mas cercanos: </label>
            <select name="centrosDeDia" id="centrosDeDia">
                <option value="CHAMARTIN" <?php echo(isset($_REQUEST['centrosDeDia']) && $_REQUEST['centrosDeDia']=="CHAMARTIN" ? "selected" : null); ?> >CHAMARTIN</option>
                <option value="SALAMANCA" <?php echo(isset($_REQUEST['centrosDeDia']) && $_REQUEST['centrosDeDia']=="SALAMANCA" ? "selected" : null); ?> >SALAMANCA</option>
                <option value="RETIRO" <?php echo(isset($_REQUEST['centrosDeDia']) && $_REQUEST['centrosDeDia']=="RETIRO" ? "selected" : null); ?> >RETIRO</option>
            </select>
            <br>
            <div>
                <?php
                    if(isset($aCentros)){
                        if(count($aCentros)>1){
                            echo "<h4>Centros de día cercanos: </h4>";
                            foreach($aCentros as $centro => $nombre){
                                echo "<h5>$nombre</h5>";
                            }
                        }elseif(count($aCentros)<=1){
                            foreach($aCentros as $errores => $error){
                                echo "<h4>".$aCentros[0]."</h4>";
                            }
                        }
                    }
                ?>
            </div>
            <br>
            <input class="boton" type="submit" value="enviar" name="enviar">
            <input class="boton" type="submit" value="volver" name="volver">
        </form>
        <br><br>
        <form class="forNavInicio" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h3>Obtener una los días festivos de españa</h3>
            <a href="https://date.nager.at/">Información sobre la api</a>
            <br>
                <?php
                if(isset($aFechasFestivos)){
                    if(count($aFechasFestivos)>1){
                        echo "<h4>Festivos España 2021: </h4>";
                        foreach($aFechasFestivos as $festivos => $dia){
                            echo "<h5>".$dia['date']." ".$dia['localName']."</h5>";
                        }
                    }elseif(count($aFechasFestivos)<=1){
                        foreach($aFechasFestivos as $festivos => $dia){
                            echo "<h4>".$aFechasFestivos[0]."</h4>";
                        }
                    }
                }
                ?>
            <input class="boton" type="submit" value="Obtener Festivos" name="obtenerDatos">
            <input class="boton" type="submit" value="volver" name="volver">
        </form>
    </div>
</main>