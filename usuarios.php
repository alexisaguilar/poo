<?php

require_once 'Database.php';


class usuarios extends Database {

    public function agregarUsuario($datos)
    {
                
        $consulta="insert into usuarios (nombre, password) values ('$datos', 'fifa2000')";
        $this->ConsultarDatabase($consulta);
    }
    
    public function listarUsuarios()
    {
        $sqlData="select * from usuarios";
        $datos= $this->ConsultarDatabase($sqlData);
        return $datos;
        //print_r($datos);
    }
}
