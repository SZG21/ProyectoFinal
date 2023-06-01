<?php
//Incluimos la conexion del php "conexion"
include("conexion.php");

//Almacenamos la informacion en las variables creadas
$cod = $_POST['codEmpleado'];
$nombre = $_POST['nomEmpleado'];
$direccion = $_POST['direcEmpleado'];
$ciudad = $_POST['ciEmpleado'];
$rfc = $_POST['rfcEmpleado'];
$telefono = $_POST['telEmpleado'];
$usuario = $_POST['usuarioEmpleado'];
$pass = $_POST['passEmpleado'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["limpiardatos"])){
    
    header("Location: RegistroEmpleados.php");
}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["insertardatos"])){

    $sqlInsertar = "INSERT INTO empleados VALUES('$cod', '$nombre', '$direccion', '$ciudad', '$rfc', '$telefono', '$usuario', '$pass')";

    
    if(mysqli_query($enlace,$sqlInsertar)){
        header("Location: RegistroEmpleados.php");
    }else{
        echo "Error: " .$sql."<br>".mysql_error($enlace);
    }
    

}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["modificardatos"])){
    
    $sqlModificar = "UPDATE empleados SET Codigo = '$cod', Nombre = '$nombre', Direccion = '$direccion', Ciudad = '$ciudad', RFC = '$rfc', Telefono = '$telefono', Usuario = '$usuario', Contrasena = '$pass' WHERE Codigo = $cod";

    
    if(mysqli_query($enlace,$sqlModificar)){
        header("Location: RegistroEmpleados.php");
    }else{
        echo "Error: " .$sql."<br>".mysql_error($enlace);
    }
    

}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["eliminardatos"])){
    
    $sqlEliminar = "DELETE FROM empleados WHERE Codigo = $cod";

    
    if(mysqli_query($enlace,$sqlEliminar)){
        header("Location: RegistroEmpleados.php");
    }else{
        echo "Error: " .$sql."<br>".mysql_error($enlace);
    }
    
}


?>