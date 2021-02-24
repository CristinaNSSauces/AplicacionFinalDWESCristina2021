<?php
require_once '../model/RESTPropio.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ // comprobamos que el usuario esta realizando una peticion POST
    if(isset($_POST['key']) && $_POST['key']==KEY){
        if (isset($_POST['codUsuario'])){ // si ha introducido el parametro
            if(RESTPropio::restablecerPassword($_POST['codUsuario'])){
                $aRespuesta = ['resultado' => 'Password reestablecida',
                               'error' => null];
            }else{ // si el codigo de usuario no se encuentra en la base de datos
                $aRespuesta = ['resultado' => null,
                               'error' => 'La contraseña no ha podido ser reestablecida'];
            }
        }
    }else{
        $aRespuesta = ['resultado' => null,
                       'error' => 'Debes introducir unan clave valida'];
    }
    
    header("Access-Control-Allow-Origin: ".PATH);
    header('Content-Type: application/json'); // el contenido devuelto va a tener formato JSON
    echo json_encode($aRespuesta); // devuelve en formato JSON el valor dado
}