<?php

/**
 * REST
 *
 * Clase que se va a utilizar para crear usar diferentes api rest
 * 
 * @author Cristina Nuñez
 * @since 1.0
 * @copyright 28-01-2021
 * @version 1.0
 */
class REST{    
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
}
?>