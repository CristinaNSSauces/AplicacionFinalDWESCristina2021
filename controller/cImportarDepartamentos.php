<?php 
$_SESSION['paginaAnterior'] = $controladores['importar'];

if(isset($_REQUEST['Cancelar'])){
    $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos'];
    header('Location: index.php');//Redirigimos al usuario a la ventana de editar departamento
    exit;
}

define("OBLIGATORIO", 1);
$entradaOK = true;

$errorArchivo = null;//Inicializamos la variable donde almacenaremos los errores del campo a nul
$errorTipo = null;

if(isset($_REQUEST['Aceptar'])){
    $errorTipo = validacionFormularios::validarElementoEnLista($_REQUEST['Tipo'], ['xml', 'json']); // validamos la entrada

    if($errorTipo==null){
        switch ($_REQUEST['Tipo']) { // en funcion del tipo que el usuario haya seleccionado en el formulario
            case 'xml':
                if ($_FILES['Archivo']['type'] != 'text/xml') {//Si la extension del archivo no es xml
                    $errorArchivo = "El fomato de archivo debe ser .xml";
                }
                break;
            
            case 'json':
                if ($_FILES['Archivo']['type'] != 'application/json') {//Si la extension del archivo no es json
                    $errorArchivo = "El fomato de archivo debe ser .json";
                }
                break;
        }
    }
    
    if($errorArchivo!=null || $errorTipo!=null){//Si hay algún error
        $entradaOK=false;
    }
}else{
    $entradaOK = false;
}

if($entradaOK){
    DepartamentoPDO::importarDepartamentos($_FILES['Archivo']['tmp_name'], $_REQUEST['Tipo']); // importamos el archivo
    
    $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos'];
    header('Location: index.php');//Redirigimos al usuario a la ventana de editar departamento
    exit;
}

$vistaEnCurso = $vistas['importar']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];

?>