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
 * @copyright 2020-2021 Cristina Nuñez
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

    /**
     * Metodo obtenerUsuarios()
     * 
     * Metodo que nos permite obtener los datos de los usuarios almacenados en la base de datos
     *
     * @return string[] array con la informacion deseada o un mensaje de error si no se ha obtenido el resultado esperado
     */
    public static function obtenerUsuarios(){
        $aDatosRespuesta = [];
        $sentenciaSQL = "Select * from T01_Usuario";
        $consulta = DBPDO::ejecutarConsulta($sentenciaSQL, []); // ejecutamos la consulta
        if($consulta){
            $resultado = $consulta->fetch(); // obtenemos los datos devueltos por la consulta
            while($resultado){
                // rellenamos el array con los datos que queremos devolver
                if($resultado['T01_CodUsuario']!='admin'){
                    $aDatosRespuesta[] = ['codUsuario' => $resultado['T01_CodUsuario'],
                                        'descUsuario' => $resultado['T01_DescUsuario'],
                                        'numConexiones' => $resultado['T01_NumConexiones'],
                                        'fechaHoraUltimaConexion' => $resultado['T01_FechaHoraUltimaConexion']!=null ? date('d/m/Y',$resultado['T01_FechaHoraUltimaConexion']) : null];
                }
                $resultado = $consulta->fetch();
            }
        }else{
            $aDatosRespuesta = ['error' => 'Se ha producido un error al ejecutar la consulta'];
        }
        return $aDatosRespuesta;
    }

    /**
     * Metodo obtenerUsuarioPorDescripcion()
     * 
     * Metodo que nos permite obtener los datos de los usuarios almacenados en la base de datos
     * segun su descripcion
     *
     * @param  string $descUsuario
     * @return string[] array con la informacion deseada o un mensaje de error si no se ha obtenido el resultado esperado
     */
    public static function obtenerUsuarioPorDescripcion($descUsuario){
        $aDatosRespuesta = [];
        $sentenciaSQL = "Select * from T01_Usuario where T01_DescUsuario LIKE '%' ? '%'";
        $consulta = DBPDO::ejecutarConsulta($sentenciaSQL, [$descUsuario]); // ejecutamos la consulta
        
        if($consulta){
            $resultado = $consulta->fetch(); // obtenemos los datos devueltos por la consulta
            while($resultado){
                // rellenamos el array con los datos que queremos devolver
                if($resultado['T01_CodUsuario']!='admin'){
                    $aDatosRespuesta[] = ['codUsuario' => $resultado['T01_CodUsuario'],
                                        'descUsuario' => $resultado['T01_DescUsuario'],
                                        'numConexiones' => $resultado['T01_NumConexiones'],
                                        'fechaHoraUltimaConexion' => $resultado['T01_FechaHoraUltimaConexion']!=null ? date('d/m/Y',$resultado['T01_FechaHoraUltimaConexion']) : null];
                }
                $resultado = $consulta->fetch();
            }
        }else{
            $aDatosRespuesta = ['error' => 'Se ha producido un error al ejecutar la consulta'];
        }
        
        return $aDatosRespuesta;
    }

    /**
     * Metodo eliminarUsuario()
     * 
     * Metodo que elimina un usuario de la base de datos
     *
     * @param  string $codUsuario codigo del usuario que queremos borrar
     * @return boolean true si se ha borrado el usuario y false en caso contrario
     */
    public static function eliminarUsuario($codUsuario){
        $usuarioEliminado = false; // Inicializamos la variable usuarioEliminado a false

        $sentenciaSQL = "Delete from T01_Usuario where T01_CodUsuario=?";
        $resultadoConsulta = DBPDO::ejecutarConsulta($sentenciaSQL, [$codUsuario]); // Ejecutamos la consulta y almacenamos el resultado en la variable resultadoConsulta

        if($resultadoConsulta){ // Si se ha realizado la consulta correctamente
            $usuarioEliminado = true; // Cambiamos el valor de la variable usuarioEliminado a true 
        }

        return $usuarioEliminado; // devolvemos la variable usuarioEliminado
    }
}
?>