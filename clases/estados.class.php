<?php
require_once "conexion/conexion.php";
require_once "respuestas.class.php";


class estados extends conexion {

    private $dcodigo = "";
    private $destado = "";
    private $Dmnpio = "";
    private $dtipoasenta = "";
    private $dasenta = "";
    private $token = "";
//912bc00f049ac8464472020c5cd06759
    public function obtenerEstados($d_codigo){
        $query = "SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM aguascalientes WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM baja_california WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM baja_california_sur WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM campeche WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM coahuila_de_zaragoza WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM colima WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM chiapas WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM chihuahua WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM distrito_federal WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM durango WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM guanajuato WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM guerrero WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM hidalgo WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM jalisco WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM mexico WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM michoacan_de_ocampo WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM morelos WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM nayarit WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM nuevo_leon WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM oaxaca WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM puebla WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM queretaro WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM quintana_roo WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM san_luis_potosi WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM sinaloa WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM sonora WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM tabasco WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM tamaulipas WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM tlaxcala WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM veracruz_de_ignacio_de_la_llave WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM yucatan WHERE d_codigo = '$d_codigo'
        UNION 
        SELECT d_codigo, d_estado, D_mnpio, d_tipo_asenta, d_asenta, d_ciudad
        FROM zacatecas WHERE d_codigo = '$d_codigo'";
        return parent::obtenerDatos($query);

    }

    // public function post($json){
    //     $_respuestas = new respuestas;
    //     $datos = json_decode($json,true);

    //     if(!isset($datos['token'])){
    //             return $_respuestas->error_401();
    //     }else{
    //         $this->token = $datos['token'];
    //         $arrayToken =   $this->buscarToken();
    //         if($arrayToken){

    //             if(!isset($datos['nombre']) || !isset($datos['dni']) || !isset($datos['correo'])){
    //                 return $_respuestas->error_400();
    //             }else{
    //                 $this->nombre = $datos['nombre'];
    //                 $this->dni = $datos['dni'];
    //                 $this->correo = $datos['correo'];
    //                 if(isset($datos['telefono'])) { $this->telefono = $datos['telefono']; }
    //                 if(isset($datos['direccion'])) { $this->direccion = $datos['direccion']; }
    //                 if(isset($datos['codigoPostal'])) { $this->codigoPostal = $datos['codigoPostal']; }
    //                 if(isset($datos['genero'])) { $this->genero = $datos['genero']; }
    //                 if(isset($datos['fechaNacimiento'])) { $this->fechaNacimiento = $datos['fechaNacimiento']; }
    //                 $resp = $this->insertarPaciente();
    //                 if($resp){
    //                     $respuesta = $_respuestas->response;
    //                     $respuesta["result"] = array(
    //                         "pacienteId" => $resp
    //                     );
    //                     return $respuesta;
    //                 }else{
    //                     return $_respuestas->error_500();
    //                 }
    //             }

    //         }else{
    //             return $_respuestas->error_401("El Token que envio es invalido o ha caducado");
    //         }
    //     }


       

    // }


    // private function insertarPaciente(){
    //     $query = "INSERT INTO " . $this->table . " (DNI,Nombre,Direccion,CodigoPostal,Telefono,Genero,FechaNacimiento,Correo)
    //     values
    //     ('" . $this->dni . "','" . $this->nombre . "','" . $this->direccion ."','" . $this->codigoPostal . "','"  . $this->telefono . "','" . $this->genero . "','" . $this->fechaNacimiento . "','" . $this->correo . "')"; 
    //     $resp = parent::nonQueryId($query);
    //     if($resp){
    //          return $resp;
    //     }else{
    //         return 0;
    //     }
    // }
    
    // public function put($json){
    //     $_respuestas = new respuestas;
    //     $datos = json_decode($json,true);

    //     if(!isset($datos['token'])){
    //         return $_respuestas->error_401();
    //     }else{
    //         $this->token = $datos['token'];
    //         $arrayToken =   $this->buscarToken();
    //         if($arrayToken){
    //             if(!isset($datos['pacienteId'])){
    //                 return $_respuestas->error_400();
    //             }else{
    //                 $this->pacienteid = $datos['pacienteId'];
    //                 if(isset($datos['nombre'])) { $this->nombre = $datos['nombre']; }
    //                 if(isset($datos['dni'])) { $this->dni = $datos['dni']; }
    //                 if(isset($datos['correo'])) { $this->correo = $datos['correo']; }
    //                 if(isset($datos['telefono'])) { $this->telefono = $datos['telefono']; }
    //                 if(isset($datos['direccion'])) { $this->direccion = $datos['direccion']; }
    //                 if(isset($datos['codigoPostal'])) { $this->codigoPostal = $datos['codigoPostal']; }
    //                 if(isset($datos['genero'])) { $this->genero = $datos['genero']; }
    //                 if(isset($datos['fechaNacimiento'])) { $this->fechaNacimiento = $datos['fechaNacimiento']; }
        
    //                 $resp = $this->modificarPaciente();
    //                 if($resp){
    //                     $respuesta = $_respuestas->response;
    //                     $respuesta["result"] = array(
    //                         "pacienteId" => $this->pacienteid
    //                     );
    //                     return $respuesta;
    //                 }else{
    //                     return $_respuestas->error_500();
    //                 }
    //             }

    //         }else{
    //             return $_respuestas->error_401("El Token que envio es invalido o ha caducado");
    //         }
    //     }


    // }


    // private function modificarPaciente(){
    //     $query = "UPDATE " . $this->table . " SET Nombre ='" . $this->nombre . "',Direccion = '" . $this->direccion . "', DNI = '" . $this->dni . "', CodigoPostal = '" .
    //     $this->codigoPostal . "', Telefono = '" . $this->telefono . "', Genero = '" . $this->genero . "', FechaNacimiento = '" . $this->fechaNacimiento . "', Correo = '" . $this->correo .
    //      "' WHERE PacienteId = '" . $this->pacienteid . "'"; 
    //     $resp = parent::nonQuery($query);
    //     if($resp >= 1){
    //          return $resp;
    //     }else{
    //         return 0;
    //     }
    // }


    // public function delete($json){
    //     $_respuestas = new respuestas;
    //     $datos = json_decode($json,true);

    //     if(!isset($datos['token'])){
    //         return $_respuestas->error_401();
    //     }else{
    //         $this->token = $datos['token'];
    //         $arrayToken =   $this->buscarToken();
    //         if($arrayToken){

    //             if(!isset($datos['pacienteId'])){
    //                 return $_respuestas->error_400();
    //             }else{
    //                 $this->pacienteid = $datos['pacienteId'];
    //                 $resp = $this->eliminarPaciente();
    //                 if($resp){
    //                     $respuesta = $_respuestas->response;
    //                     $respuesta["result"] = array(
    //                         "pacienteId" => $this->pacienteid
    //                     );
    //                     return $respuesta;
    //                 }else{
    //                     return $_respuestas->error_500();
    //                 }
    //             }

    //         }else{
    //             return $_respuestas->error_401("El Token que envio es invalido o ha caducado");
    //         }
    //     }



     
    // }


    // private function eliminarPaciente(){
    //     $query = "DELETE FROM " . $this->table . " WHERE PacienteId= '" . $this->pacienteid . "'";
    //     $resp = parent::nonQuery($query);
    //     if($resp >= 1 ){
    //         return $resp;
    //     }else{
    //         return 0;
    //     }
    // }


    // private function buscarToken(){
    //     $query = "SELECT  TokenId,UsuarioId,Estado from usuarios_token WHERE Token = '" . $this->token . "' AND Estado = 'Activo'";
    //     $resp = parent::obtenerDatos($query);
    //     if($resp){
    //         return $resp;
    //     }else{
    //         return 0;
    //     }
    // }


    // private function actualizarToken($tokenid){
    //     $date = date("Y-m-d H:i");
    //     $query = "UPDATE usuarios_token SET Fecha = '$date' WHERE TokenId = '$tokenid' ";
    //     $resp = parent::nonQuery($query);
    //     if($resp >= 1){
    //         return $resp;
    //     }else{
    //         return 0;
    //     }
    // }



}





?>