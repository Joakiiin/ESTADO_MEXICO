<?php
require_once 'clases/respuestas.class.php';
require_once 'clases/estados.class.php';

$_respuestas = new respuestas;
$_estados = new estados;


if($_SERVER['REQUEST_METHOD'] == "GET"){

if(isset($_GET['d_codigo'])){
        $d_codigo = $_GET['d_codigo'];
        $datosEstados = $_estados->obtenerEstados($d_codigo);
        header("Content-Type: application/json");
        echo json_encode($datosEstados);
        http_response_code(200);
    }
    
}

?>