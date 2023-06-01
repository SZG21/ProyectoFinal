<?php

//Creacion de variables para hacer la conexion posteriormente
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "PanaleriaBD";
//Conexion con la BD y el Servidor
$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

if(!$enlace){
    die ("No hay conexion: ".mysqli_connect_error());
}

?>