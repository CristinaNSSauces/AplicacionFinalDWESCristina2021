<?php 
$_SESSION['paginaAnterior'] = $controladores['mtoUsuarios'];

if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

// if(isset($_REQUEST['Tecnologias'])){ //  Si el usuario ha pulsado el boton Tecnoologias
//     $_SESSION['paginaEnCurso'] = $controladores['tecnologias']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
//     header('Location: index.php');
//     exit;
// }

$vistaEnCurso = $vistas['mtoUsuarios']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];

?>