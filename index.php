<?php
require_once 'connectDatabase.php';

$consulta=new connectDatabase();
//$consulta->consultarDatabase();

$mostrar= $consulta->consultarDatabase('SELECT * FROM h0gwb_content');

foreach ($mostrar as $id)
{
    echo $id['title'];
    echo "<br>";
}
//$sqlData="insert into usuarios (nombre, password,jhjh) values ('rosalindo pcuetroo', 'fifa2000','asas')";
//$insertar=$consulta->insertarDatabase($sqlData);
$consulta->elimintarDatabase('delete from usuarios where id= kd');
