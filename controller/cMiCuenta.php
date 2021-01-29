<?php

$_SESSION['paginaAnterior'] = $controladores['miCuenta'];

if(isset($_REQUEST['Cancelar'])){
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['CambiarPassword'])){
    $_SESSION['paginaEnCurso'] = $controladores['cambiarPassword']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['EliminarCuenta'])){
    $_SESSION['paginaEnCurso'] = $controladores['borrarCuenta']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['Tecnologias'])){ //  Si el usuario ha pulsado el boton Tecnoologias
    $_SESSION['paginaEnCurso'] = $controladores['wip']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    header('Location: index.php');
    exit;
}

define("OBLIGATORIO", 1);
define("OPCIONAL", 0);

$entradaOK = true;
$errorDescripcion = "";
$errorImagen = "";
$imagenSubida = null;

$oUsuarioActual = $_SESSION['usuarioDAW215AplicacionFinal'];

if(isset($_REQUEST['Aceptar'])){
    $errorDescripcion = validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescUsuario'], 255, 3, OBLIGATORIO);

    if($_FILES['imagen']['tmp_name']!=null){//Si el usuario ha introducido una imagen
        $tipo = $_FILES['imagen']['type'];//Almacenamos el tipo de la imagen
        if (($tipo == "image/gif") || ($tipo == "image/jpeg") || ($tipo == "image/jpg") || ($tipo == "image/png")){//Comprobamos que el tipo se encuentra entre las diferentes opciones
            $imagenSubida = file_get_contents($_FILES['imagen']['tmp_name']);//Almacenamos el archivo convertido en una cadena
            
        }else{
            $errorImagen="formato incorrecto";
        }
    }
    // Recorremos el array de errores
    if ($errorDescripcion != null) { // Comprobamos que el campo no esté vacio
        $entradaOK = false; // En caso de que haya algún error le asignamos a entradaOK el valor false para que vuelva a rellenar el formulario
        $_REQUEST['Descripcion']="";//Limpiamos los campos del formulario
    }
    
    if ($errorImagen != null) { // Comprobamos que el campo no esté vacio
        $entradaOK = false; // En caso de que haya algún error le asignamos a entradaOK el valor false para que vuelva a rellenar el formulario
    }
}else{
    $entradaOK = false; // Si el usuario no ha enviado el formulario asignamos a entradaOK el valor false para que rellene el formulario
}
if($entradaOK){
    $_SESSION['usuarioDAW215AplicacionFinal']=UsuarioPDO::modificarUsuario($oUsuarioActual->codUsuario, $_REQUEST['DescUsuario'], $imagenSubida);
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del inicios
    header('Location: index.php');
    exit;
    /*
    $sqlImagen = "Update T01_Usuario set T01_ImagenUsuario = :Imagen where T01_CodUsuario=:CodUsuario";
    $consultaImagen = $miDB->prepare($sqlImagen);//Preparamos la consulta
    $parametrosImagen = [":Imagen" => $imagenSubida,
                            ":CodUsuario" => $_SESSION['usuarioDAW215MtoDepartamentosTema5']];

    $consultaImagen->execute($parametrosImagen);//Ejecutamos la consulta
    */
}


$vistaEnCurso = $vistas['miCuenta']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];
