<?php


class connectDatabase {
   
    
    
    protected function get_conexion()
    {
        $user="";
        $pass="";
        $host="";
        $db="";
        $conexion=new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
        return $conexion;
    }
    
    protected function ConsultarDatabase($sqlData) {
        
         try {
        
        $conexion= $this->get_conexion();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $statement=$conexion->prepare($sqlData);
        $statement->execute();
            echo "Consulta realizada correctamente";
        
        } catch (PDOException $ex) {
            echo $sqlData . "<br>" . $ex->getMessage();
        }
    }
    
    
    public function consultarDatabase($sqlData)
    {
        $rows=null;
        
        $conexion=$this->get_conexion();
        
        
        $statement=$conexion->prepare($sqlData);
        $statement->execute();
        
        
        
        while($resultado=$statement->fetch())
        {
            $rows[]=$resultado;
        }
      
        return $rows;
    }
    
    public function insertarDatabase($sqlData)
    {
        try {
        
        $conexion= $this->get_conexion();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $statement=$conexion->prepare($sqlData);
        $statement->execute();
            echo "MUY BIENNNNNNNNNNNNN";
        
        } catch (PDOException $ex) {
            echo $sqlData . "<br>" . $ex->getMessage();
        }
    }
    
     public function elimintarDatabase($sqlData)
    {
        try {
        
        $conexion= $this->get_conexion();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $statement=$conexion->prepare($sqlData);
        $statement->execute();
            echo "MUY BIENNNNNNNNNNNNN";
        
        } catch (PDOException $ex) {
            echo $sqlData . "<br>" . $ex->getMessage();
        }
    }
    
}


class hola extends connectDatabase
{
    public function insertar($sqldata)
    {
        $this->consultarDatabase($sqlData);
    }
}