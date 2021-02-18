<?php
require_once '../model/RESTPropio.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){ // comprobamos que el usuario esta realizando una peticion GET
    if (isset($_GET['codDepartamento']) && ctype_upper($_GET['codDepartamento'])){ // si ha introducido el parametro
        $aDatosObtenidos = RESTPropio::obtenerDatos($_GET['codDepartamento']); // obtenemos los datos del departamento pasado como parametro
        
        if(count($aDatosObtenidos)>1){ // si el codigo de departamento se encuentra en la base de datos
            $aRespuesta = ['resultado' => ['codDepartamento' => $aDatosObtenidos['codDepartamento'],
                                           'descDepartamento' => $aDatosObtenidos['descDepartamento'],
                                           'volumenDeNegocio' => $aDatosObtenidos['volumenDeNegocio']],
                           'error' => null];
        }else{ // si el codigo de departamento no se encuentra en la base de datos
            $aRespuesta = ['resultado' => null,
                           'error' => 'El codigo de departamento no se encuentra en la base de datos'];
        }
        
    }else{ // si el usuario no introduce el parametro necesario para realizar la peticion
        $aRespuesta = ['resultado' => null,
                       'error' => 'El codigo debe estar formado por tres letras mayusculas'];
    }
    
    header('Content-Type: application/json'); // el contenido devuelto va a tener formato JSON
    echo json_encode($aRespuesta); // devuelve en formato JSON el valor dado
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ // comprobamos que el usuario esta realizando una peticion GET
    if(isset($_POST['key']) && $_POST['key']==KEY){
        if (isset($_POST['codDepartamento']) && ctype_upper($_POST['codDepartamento'])){ // si ha introducido el parametro
            $aDatosObtenidos = RESTPropio::obtenerDatos($_POST['codDepartamento']); // obtenemos los datos del departamento pasado como parametro
            
            if(count($aDatosObtenidos)>1){ // si el codigo de departamento se encuentra en la base de datos
                $aRespuesta = ['resultado' => ['codDepartamento' => $aDatosObtenidos['codDepartamento'],
                                            'descDepartamento' => $aDatosObtenidos['descDepartamento'],
                                            'volumenDeNegocio' => $aDatosObtenidos['volumenDeNegocio']],
                               'error' => null];
            }else{ // si el codigo de departamento no se encuentra en la base de datos
                $aRespuesta = ['resultado' => null,
                               'error' => 'El codigo de departamento no se encuentra en la base de datos'];
            }
            
        }else{ // si el usuario no introduce el parametro necesario para realizar la peticion
            $aRespuesta = ['resultado' => null,
                           'error' => 'El codigo debe estar formado por tres letras mayusculas'];
        }
    }else{
        $aRespuesta = ['resultado' => null,
                       'error' => 'Debes introducir unan clave valida'];
    }
    
    header('Content-Type: application/json'); // el contenido devuelto va a tener formato JSON
    echo json_encode($aRespuesta); // devuelve en formato JSON el valor dado
}
?>