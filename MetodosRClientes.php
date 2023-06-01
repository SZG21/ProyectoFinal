<?php
//Incluimos la conexion del php "conexion"
include("conexion.php");

//Almacenamos la informacion en las variables creadas
$cod = $_POST['codCliente'];
$nombre = $_POST['nomCliente'];
$direccion = $_POST['direcCliente'];
$ciudad = $_POST['ciCliente'];
$telefono = $_POST['telCliente'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["limpiardatos"])){
    
    header("Location: RegistroClientes.php");
}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["insertardatos"])){

    $sqlInsertar = "INSERT INTO clientes VALUES('$cod', '$nombre', '$direccion', '$ciudad', '$telefono')";

    
    if(mysqli_query($enlace,$sqlInsertar)){
        header("Location: RegistroClientes.php");
    }else{
        echo "Error: " .$sql."<br>".mysql_error($enlace);
    }
    

}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["modificardatos"])){
    
    $sqlModificar = "UPDATE clientes SET Codigo = '$cod', Nombre = '$nombre', Direccion = '$direccion', Ciudad = '$ciudad', Telefono = '$telefono' WHERE Codigo = $cod";

    
    if(mysqli_query($enlace,$sqlModificar)){
        header("Location: RegistroClientes.php");
    }else{
        echo "Error: " .$sql."<br>".mysql_error($enlace);
    }
    

}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["eliminardatos"])){
    
    $sqlEliminar = "DELETE FROM clientes WHERE Codigo = $cod";

    
    if(mysqli_query($enlace,$sqlEliminar)){
        header("Location: RegistroClientes.php");
    }else{
        echo "Error: " .$sql."<br>".mysql_error($enlace);
    }
    
}

?>