<?php

$_SESSION['paginaAnterior'] = $controladores['inicio'];

// if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
//     session_destroy(); // destruye todos los datos asociados a la sesion
//     header("Location: index.php"); // redirige al login
//     exit;
// }

if(isset($_REQUEST['editarPerfil'])){
    $_SESSION['paginaEnCurso'] = $controladores['miCuenta']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del work in progress
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['mtoDepartamentos'])){
    $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del work in progress
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['mtoUsuarios'])){
    $_SESSION['paginaEnCurso'] = $controladores['mtoUsuarios']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del work in progress
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['rest'])){
    $_SESSION['paginaEnCurso'] = $controladores['rest']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del rest
    header('Location: index.php');
    exit;
}

// if(isset($_REQUEST['Tecnologias'])){ //  Si el usuario ha pulsado el boton Tecnoologias
//     $_SESSION['paginaEnCurso'] = $controladores['tecnologias']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
//     header('Location: index.php');
//     exit;
// }

$oUsuarioActual = $_SESSION['usuarioDAW215AplicacionFinal'];

if(isset($_SESSION['fechaHoraUltimaConexionAnterior'])){
    $ultimaConexion = $_SESSION['fechaHoraUltimaConexionAnterior']; // variable que tiene la ultima hora de conexion del usuario
}

$vistaEnCurso = $vistas['inicio']; // guardamos en la variable vistaEnCurso la vista que queremos implementar
require_once $vistas['layout']; // incluimos la vista del layout

?>