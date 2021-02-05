<?php
require_once '../model/Calculadora.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){ // comprobamos que el usuario esta realizando una peticion GET
    if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['operacion'])){ // Si se han pasado los parametros necesarios
        switch ($_GET['operacion']){ // en funcion de la operacion que el usuario quiera realizar emplearemos la funcion necesaria para realizar dicha operacion
            case 'sumar':
                $resultado = Calculadora::Sumar($_GET['n1'], $_GET['n2']);
                break;
            case 'restar':
                $resultado = Calculadora::Restar($_GET['n1'], $_GET['n2']);
                break;
            case 'multiplicar':
                $resultado = Calculadora::Multiplicar($_GET['n1'], $_GET['n2']);
                break;
            case 'dividir':
                if($_GET['n2']!=0){ 
                    $resultado = Calculadora::Dividir($_GET['n1'], $_GET['n2']);
                }else{ // si el usuario intenta dividir un numero entre cero
                    $error = true;
                    $aRespuesta = ['resultado' => null,
                                   'error' => 'Debes introducir los parametros correctos'];
                }
                break;
        }
        if($error==false){ // si no hay ningun error a la hora de realizar las diferentes operaciones
            $aRespuesta = ['resultado' => $resultado,
                           'error' => null];
        }
    }else{ // si no se han pasado los parametros necesarios
        $aRespuesta = ['resultado' => null,
                       'error' => 'Debes introducir los parametros correctos'];
    }
    
    header('Content-Type: application/json'); // el contenido devuelto va a tener formato JSON
    echo json_encode($aRespuesta); // devuelve en formato JSON el valor dado
}
?>
