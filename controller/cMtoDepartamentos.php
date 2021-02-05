<?php
if(!isset($_SESSION['BusquedaDepartamento'])){//Si el usuario no ha realizado ninguna busqueda de ningun departamento
    $_SESSION['BusquedaDepartamento']="";//Por defecto establecemos la variable de sesión vacía para que aparezcan todos los departamentos almacenados
}

if(!isset($_SESSION['CriterioBusqueda'])){//Si el usuario no ha realizado ninguna busqueda de ningun departamento
    $_SESSION['CriterioBusqueda']="BuscarDescDepartamento";//Por defecto establecemos la variable de sesión vacía para que aparezcan todos los departamentos almacenados
}

if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

define("OPCIONAL", 0);
$errorBusqueda = null;
$entradaOK = true;

if(isset($_REQUEST['Buscar'])){
    $errorBusqueda = validacionFormularios::comprobarAlfaNumerico($_REQUEST['Departamento'], 255, 1, OPCIONAL);//Comprobamos que la descripción sea alfanumerico
    
    if($errorBusqueda != null){
        $entradaOK = false;
        $_REQUEST['Departamento'] = "";
    }  

}else{
    $entradaOK = false;
}

if($entradaOK){
    $_SESSION['CriterioBusqueda'] = $_REQUEST['BuscarDepartamento'];
    $_SESSION['BusquedaDepartamento'] = $_REQUEST['Departamento'];
    if($_REQUEST['BuscarDepartamento']=='BuscarDescDepartamento'){
        $aResultadoBusqueda = DepartamentoPDO::buscarDepartamentosPorDescripcion($_REQUEST['Departamento'], 1, 5);
        $aDepartamentos = $aResultadoBusqueda[0];
    }else{
        $aResultadoBusqueda = DepartamentoPDO::buscarDepartamentosPorCodigo($_REQUEST['Departamento'], 1, 5);
        $aDepartamentos = $aResultadoBusqueda[0];
    }
}else{
    if($_SESSION['CriterioBusqueda']=='BuscarDescDepartamento'){
        $aResultadoBusqueda = DepartamentoPDO::buscarDepartamentosPorDescripcion($_SESSION['BusquedaDepartamento'], 1, 5);
        $aDepartamentos = $aResultadoBusqueda[0];
    }else{
        $aResultadoBusqueda = DepartamentoPDO::buscarDepartamentosPorCodigo($_SESSION['BusquedaDepartamento'], 1, 5);
        $aDepartamentos = $aResultadoBusqueda[0];
    }
}

$busquedaDepartamento = $_SESSION['BusquedaDepartamento'];

$criterioBusqueda = $_SESSION['CriterioBusqueda'];

$vistaEnCurso = $vistas['mtoDepartamentos']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];
?>