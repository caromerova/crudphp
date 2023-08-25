<?php
//variables: $nombrevariable;
//para la conexion necesitamos 4 parametros: 1-servidor2-usuario3-contraseña y el nombre de la base de datos
$servidor="localhost";
$user="root";
$password="";
$basedatos="crudphp";

$conexion=new mysqli($servidor,$user,$password,$basedatos);//ya la conexion esta lista

//comprobar si existe algun error de conexion
if($conexion->connect_errno)//connect_errno verifica errores de conectividad
{
    echo "Nuestra conexion presenta fallas";
    exit();
}
?>