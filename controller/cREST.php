<?php
$_SESSION['paginaAnterior'] = $controladores ['rest'];

error_reporting(0);
if(isset($_REQUEST['Tecnologias'])){ //  Si el usuario ha pulsado el boton Tecnoologias
    $_SESSION['paginaEnCurso'] = $controladores['wip']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['volver'])){ // Si el usuario ha pulsado el boton de volver
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion paginaEnCurso la ruta del controlador del inicio
    header('Location: index.php'); //Cargamos el index
    exit;
}

if(isset($_REQUEST['enviar'])){ // si el usuario ha dado clic en el boton de enviar del api rest para obtener los centros de dia mas cercanos
    $parametroBusqueda = $_REQUEST['centrosDeDia']; // asignamos a la variable parametroBusqueda el parametro necesario para el uso del api rest
    $aCentros = RESTAjeno::obtenerCentrosDeDia($parametroBusqueda); // ejecutamos el metodo para realizar la peticion al servidor del api rest
}

if(isset($_REQUEST['obtenerDatos'])){ // si el usuario ha dado clic en el boton de enviar del api rest para obtener los dias festivos en españa
    $aFechasFestivos = RESTAjeno::obtenerFestivosEsp(); // ejecutamos el metodo para realizar la peticion al servidor del api rest
}

if(isset($_REQUEST['obtenerVolumenNegocio'])){
    $aObtenerVolumenNegocio = RESTAjeno::obtenerVolumenDeNegocio($_REQUEST['codDepartamento']);
}

if(isset($_REQUEST['obtenerDatosPost'])){
    $aObtenerDatosDepartamento = RESTAjeno::obtenerDatosDepartamentoPOST($_REQUEST['codDepartamentoPost'], $_REQUEST['key']);
}

error_reporting(-1);
$vistaEnCurso = $vistas['rest']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout']; // cargamos el layout

?>