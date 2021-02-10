<?php 
$_SESSION['paginaAnterior'] = $controladores['exportar'];

if(isset($_REQUEST['Cancelar'])){
    $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos'];
    header('Location: index.php');//Redirigimos al usuario a la ventana de editar departamento
    exit;
}

define("OBLIGATORIO", 1);
$entradaOK = true;

$errorArchivo = null;//Inicializamos la variable donde almacenaremos los errores del campo a null


if(isset($_REQUEST['Aceptar'])){
    $errorArchivo = validacionFormularios::validarElementoEnLista($_REQUEST['Archivo'], ['xml', 'json']);
    
    if($errorArchivo!=null){//Si hay algún error
        $entradaOK=false;
    }
}else{
    $entradaOK = false;
}

if($entradaOK){
    DepartamentoPDO::exportarDepartamentos($_REQUEST['Archivo']);
}

$vistaEnCurso = $vistas['exportar']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];

?>