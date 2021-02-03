<?php
require_once "core/libreriaValidacion.php";

require_once "model/Usuario.php";
require_once "model/UsuarioDB.php";
require_once "model/UsuarioPDO.php";
require_once "model/Departamento.php";
require_once "model/DepartamentoPDO.php";
require_once "model/RESTAjeno.php";
require_once "model/DBPDO.php";

$controladores = [
    "wip" => "controller/cWIP.php",
    "login" => "controller/cLogin.php",
    "inicio" => "controller/cInicio.php",
    "registro" => "controller/cRegistro.php",
    "rest" => "controller/cREST.php",
    "miCuenta" => "controller/cMiCuenta.php",
    "borrarCuenta" => "controller/cBorrarCuenta.php",
    "cambiarPassword" => "controller/cCambiarPassword.php",
    "mtoDepartamentos" => "controller/cMtoDepartamentos.php"
];

$vistas = [
    "wip" => "view/vWIP.php",
    "layout" => "view/layout.php",
    "login" => "view/vLogin.php",
    "inicio" => "view/vInicio.php",
    "registro" => "view/vRegistro.php",
    "rest" => "view/vREST.php",
    "miCuenta" => "view/vMiCuenta.php",
    "borrarCuenta" => "view/vBorrarCuenta.php",
    "cambiarPassword" => "view/vCambiarPassword.php",
    "mtoDepartamentos" => "view/vMtoDepartamentos.php"
];
?>