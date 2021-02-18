<?php
require_once '../model/RESTPropio.php';

$aUsuarios = RESTPropio::obtenerUsuarios();

header("Access-Control-Allow-Origin: ".PATH);
header('Content-Type: application/json'); // el contenido devuelto va a tener formato JSON
echo json_encode($aUsuarios); // devuelve en formato JSON el valor dado