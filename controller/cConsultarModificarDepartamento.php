<?php
    $_SESSION['paginaAnterior'] = $controladores['consultarModificar'];

    $oDepartamento = DepartamentoPDO::obtenerDatosDepartamento($_SESSION['CodDepartamento']);

    if(isset($_REQUEST['Cancelar'])){
        $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos'];
        header('Location: index.php');//Redirigimos al usuario a la ventana de editar departamento
        exit;
    }

    define("OBLIGATORIO", 1);
    $entradaOK = true;

    //Declaramos el array de errores y lo inicializamos a null
    $aErrores = ['DescDepartamento' => null,
                 'VolumenNegocio' => null];

    //Declaramos el array del formulario y lo inicializamos a null
    $aFormulario = ['DescDepartamento' => null,
                    'VolumenNegocio' => null];

    if(isset($_REQUEST['Aceptar'])){
        $aErrores['DescDepartamento'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescDepartamento'], 255, 1, OBLIGATORIO);//Comprobamos que la descripción del departamento sea alfanumérico
        $aErrores['VolumenNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['VolumenNegocio'], PHP_FLOAT_MAX, PHP_FLOAT_MIN, OBLIGATORIO);//Comprobamos que el volumen de negocio sea float
        
        // Recorremos el array de errores
        foreach ($aErrores as $campo => $error){
            if ($error != null) { // Comprobamos que el campo no esté vacio
                $entradaOK = false; // En caso de que haya algún error le asignamos a entradaOK el valor false para que vuelva a rellenar el formulario      
                $_REQUEST[$campo] = "";
            }
        }
    }else{
        $entradaOK = false;
    }

    if($entradaOK){
        DepartamentoPDO::modificarDepartamento($oDepartamento->codDepartamento, $_REQUEST['DescDepartamento'], $_REQUEST['VolumenNegocio']);
        
        $_SESSION['paginaEnCurso'] = $controladores['mtoDepartamentos'];
        header('Location: index.php');//Redirigimos al usuario a la ventana de editar departamento
        exit;
    }

    $vistaEnCurso = $vistas['consultarModificar']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

    require_once $vistas['layout'];
?>