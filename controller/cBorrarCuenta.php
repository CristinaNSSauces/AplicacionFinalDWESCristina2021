<?php

$_SESSION['paginaAnterior'] = $controladores ['borrarCuenta'];

if(isset($_REQUEST['Cancelar'])){
    
    $_SESSION['paginaEnCurso'] = $controladores['miCuenta']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

if(isset($_REQUEST['Tecnologias'])){ //  Si el usuario ha pulsado el boton Tecnoologias
    $_SESSION['paginaEnCurso'] = $controladores['tecnologias']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    header('Location: index.php');
    exit;
}

define("OBLIGATORIO", 1); // defino e inicializo la constante a 1 para los campos que son obligatorios

$entradaOK = true;

$errorPassword = null;

if(isset($_REQUEST['EliminarCuenta'])){
    $errorPassword = validacionFormularios::validarPassword($_REQUEST['Password'], 8, 1, 1, OBLIGATORIO);// comprueba que la entrada del password es correcta
    
    if($errorPassword!=null){
        $entradaOK = false;
    }
    
    if($entradaOK){
        $passwordEncriptada = hash("sha256", ($_SESSION['usuarioDAW215AplicacionFinal']->codUsuario.$_REQUEST['Password']));
        if($passwordEncriptada!=$_SESSION['usuarioDAW215AplicacionFinal']->password){
            $errorPassword = "Password Erronea";
            $entradaOK = false;
        }
    }
}else{
    $entradaOK = false;
}

if($entradaOK){
    UsuarioPDO::borrarUsuario($_SESSION['usuarioDAW215AplicacionFinal']->codUsuario);
    session_destroy();
    
    header('Location: index.php'); // redirige al index.php
    exit;
    
}

$vistaEnCurso = $vistas['borrarCuenta']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];