<?php 

require_once '../config/configDB.php';
require_once 'DBPDO.php';
require_once 'DepartamentoPDO.php';

/**
 * Class RESTPropio
 *
 * Clase cuyos metodos son utilizados en los diferentes servicios REST creados
 * 
 * @author Cristina Nuñez
 * @since 1.0
 * @copyright 01-02-2021
 * @version 1.0
 */
class RESTPropio{
        
    /**
     * Metodo obtenerDatos()
     * 
     * Metodo que nos permite obtener el codigo de departamento, descripcion y 
     * volumen de negocio de un departamento almacenado en la base de datos
     *
     * @param  string $codDepartamento
     * @return string[] array con la informacion deseada o un mensaje de error si no se ha obtenido el resultado esperado
     */
    public static function obtenerDatos($codDepartamento){
        if(!DepartamentoPDO::validarCodNoExiste($codDepartamento)){ // si existe el codigo del departamento pasado como parametro
            $sentenciaSQL = "Select T02_CodDepartamento, T02_DescDepartamento, T02_VolumenNegocio from T02_Departamento where T02_CodDepartamento=?";
            $consulta = DBPDO::ejecutarConsulta($sentenciaSQL, [$codDepartamento]); // ejecutamos la consulta
            $resultado = $consulta->fetch(); // obtenemos los datos devueltos por la consulta

            // rellenamos el array con los datos que queremos devolver
            $aDatosRespuesta = ['codDepartamento' => $resultado['T02_CodDepartamento'],
                                'descDepartamento' => $resultado['T02_DescDepartamento'],
                                'volumenDeNegocio' => $resultado['T02_VolumenNegocio']];
            
        }else{ // si el codigo pasado como parametro no se encuentra en la base de datos
            $aDatosRespuesta = ['error' => 'Codigo de departamento no valido'];
        }
        return $aDatosRespuesta;
    }
}
?>