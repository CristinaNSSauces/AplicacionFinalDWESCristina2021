<?php

/**
 * RESTAjeno
 *
 * Clase que se va a utilizar para usar diferentes api rest
 * 
 * @author Cristina Nuñez
 * @since 1.0
 * @copyright 28-01-2021
 * @version 1.0
 */
class RESTAjeno{    
    /**
     * obtenerCentrosDeDia
     * 
     * Funcion para obtener los centros de dia mas cercanos de un distrito determinado de Madrid
     * Si se resliza la conexion con el servidor devolverá un array con los datos necesarios para la respuesta,
     * si por lo contrario se produce un error devolverá un array con los mensajes de error correspondientes
     *
     * @param  string $nombreDistrito
     * @return string[] Array de respuestas
     */
    public static function obtenerCentrosDeDia($nombreDistrito){
        try{
            $resultado = file_get_contents('https://datos.madrid.es/egob/catalogo/200342-0-centros-dia.json?distrito_nombre='.$nombreDistrito, true); // obtenemos el resultado del servidor del api rest
            
            if($resultado == false){ // si no obtenemos el resultado esperado
                throw new Exception("Error en la conexión con el servidor, vuelva a intentarlo mas tarde"); //Lanzamos una excepcion
            }

            $aDatos = json_decode($resultado, true); // Almacenamos el array devuelto por json_decode
            $centrosDia = $aDatos['@graph'];

            $aNombreCentrosDia = []; // declaramos un array para almacena los datos que queramos devolver
            $centro = 0;
            foreach($centrosDia as $campo => $valor){ //Recorremos el array de la respuesta
                $aNombreCentrosDia[$centro] = $valor['title']; // Asignamos el valor del campo deseado a una posicion del array
                $centro++;
            }
            return $aNombreCentrosDia; //devolvemos un array con los datos que queremos devolver
            
        }catch(Exception $excepcion){
            $aRespuesta [0] = $excepcion -> getMessage(); //Asignamos a un array el mensaje de error de la excepcion
            return $aRespuesta; // devolvemos el array con el mensaje de error
        }
        
    }
    
    /**
     * obtenerFestivosEsp
     * 
     * Funcion para ontener los dias festivos en España
     * Si se resliza la conexion con el servidor devolverá un array con los datos necesarios para la respuesta,
     * si por lo contrario se produce un error devolverá un array con los mensajes de error correspondientes
     *
     * @return string[] Array de respuestas
     */
    public static function obtenerFestivosEsp(){
        try{
            $resultado = file_get_contents('https://date.nager.at/api/v2/PublicHolidays/2021/ES', true); // obtenemos el resultado del servidor del api rest

            if($resultado == false){// si no obtenemos el resultado esperado
                throw new Exception("Error en la conexión con el servidor, vuelva a intentarlo mas tarde"); // lanzamos una excepcion
            }
            
            return json_decode($resultado, true); // devolvemos un array con los datos correspondientes
            
        }catch(Exception $excepcion){
            $aRespuesta [0] = $excepcion -> getMessage(); //Asignamos a un array el mensaje de error de la excepcion
            return $aRespuesta; // devolvemos el array con el mensaje de error
        }
        
    }
        
    /**
     * obtenerVolumenDeNegocio
     * 
     * Metodo que nos permite obtener el volumen de negocio de un departamento almacenado en la base de datos de Javier
     * pasando como parametro el codigo del departamento del cual deseamos obtener la informacion
     *
     * @param  string $codDepartamento codigo de departamento
     * @return string[] array con los datos obtenidos en la conexion con el servidor
     */
    public static function obtenerVolumenDeNegocio($codDepartamento){ // TODO Cambiar en paso a explotacion
        $resultado = file_get_contents('http://daw217.ieslossauces.es/AplicacionFinalDWESJavier2021/api/consultarDatosDepartamento.php?codDepartamento='.$codDepartamento); // obtenemos el resultado del servidor del api rest

        return json_decode($resultado, true);// devolvemos un array con los datos correspondientes
    }
    
    /**
     * obtenerVolumenDeNegocioPOST
     * 
     * Metodo que nos permite obtener los datos de un departamento almacenado en la base de datos 
     * pasando como parametro el codigo del departamento y una clave mediante el metodo POST 
     *
     * @param  string $codDepartamento codigo de departamento
     * @param  string $key clave para acceder al servicio REST
     * @return string[] array con los datos obtenidos en la conexion con el servidor
     */
    public static function obtenerDatosDepartamentoPOST($codDepartamento, $key){ // TODO Cambiar en paso a explotacion

        $aParametros = ['codDepartamento' => $codDepartamento,
                        'key' => hash('sha256', $key)]; // array con los parametros introducidos por el usuario

        $conexionCurl = curl_init('http://192.168.1.215/AplicacionFinalDWESCristina2021/api/servicioDepartamento.php'); // iniciamos sesion

        curl_setopt($conexionCurl, CURLOPT_POSTFIELDS, $aParametros); // preparamos los parametros por metodo post
        
        curl_setopt($conexionCurl, CURLOPT_RETURNTRANSFER, true); // obtenemos el resultado como string

        $respuesta = curl_exec($conexionCurl); // establecemos la conexion y pasamos los parametros

        curl_close($conexionCurl);

        $resultado = json_decode($respuesta, true);

        return $resultado;
    }
}
?>