<?php
require_once '../model/RESTPropio.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ // comprobamos que el usuario esta realizando una peticion POST
    if (isset($_POST['descUsuario'])){ // si ha introducido el parametro
        if(RESTPropio::obtenerUsuarioPorDescripcion($_POST['descUsuario'])){
            $aRespuesta = ['resultado' => RESTPropio::obtenerUsuarioPorDescripcion($_POST['descUsuario']),
                           'error' => null];
        }else{ // si el codigo del usuario no se encuentra en la base de datos
            $aRespuesta = ['resultado' => null,
                           'error' => 'El usuario no se encuentra en la base de datos'];
        }
    }else{
        $aRespuesta = ['resultado' => null,
                       'error' => 'Debes introducir descripcion de usuario'];
    }
    
    header("Access-Control-Allow-Origin: ".PATH);
    header('Content-Type: application/json'); // el contenido devuelto va a tener formato JSON
    echo json_encode($aRespuesta); // devuelve en formato JSON el valor dado
}