<?php

include_once '../Clase/Cl_Conexion.php';
include_once '../Clase/Usuario.php';

class DaoCl_Usuario {

    private $cone;

    public function conexion() {
        try {
            $this->cone = new Cl_Conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function insertar($user){
    	try {

    		$sql = "INSERT INTO USUARIO VALUES (NULL, '@NOMBRE', '@CLAVE', '@TIPO')";
    		$sql = str_replace(@NOMBRE, $user->getNombre(), $sql);
    		$sql = str_replace(@CLAVE, $user->getClve(), $sql);
    		$sql = str_replace(@TIPO, $user->getTipo_usuario(), $sql);
    		return $this->cone->sqlOperaciones($sql);
    	} catch (Exception $exc) {
    		echo $exc->getTraceAsString();
    	}
    }



}
