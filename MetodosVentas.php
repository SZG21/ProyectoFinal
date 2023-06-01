<?php
// Incluimos la conexión del archivo "conexion.php"
include("conexion.php");

// Almacenamos la información en las variables creadas
$fol = $_POST['folVenta'];
$empleado = $_POST['nomempleadoVenta'];
$nomprod = $_POST['nomVenta'];
$cantidad = $_POST['cantVenta'];
$cliente = $_POST['clienteVenta'];
$precio = $_POST['precVenta'];

// Consultamos el valor del total antes de insertarlo
$total = $cantidad * $precio;

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["limpiardatos"])) {
    header("Location: RegistroVentas.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["insertardatos"])) {
    $sqlInsertar = "INSERT INTO ventas (Folio, Nombre, Precio, Empleado, Cantidad, Cliente, Total) VALUES ('$fol', '$nomprod', '$precio', '$empleado', '$cantidad', '$cliente', '$total')";
    
    if (mysqli_query($enlace, $sqlInsertar)) {
        header("Location: RegistroVentas.php");
        exit;
    } else {
        echo "Error: " . $sqlInsertar . "<br>" . mysqli_error($enlace);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["modificardatos"])) {
    $sqlModificar = "UPDATE ventas SET Folio = '$fol', Nombre = '$nomprod', Precio = '$precio', Empleado = '$empleado', Cantidad = '$cantidad', Cliente = '$cliente', Total = '$total' WHERE Folio = '$fol'";
    
    if (mysqli_query($enlace, $sqlModificar)) {
        header("Location: RegistroVentas.php");
        exit;
    } else {
        echo "Error: " . $sqlModificar . "<br>" . mysqli_error($enlace);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["eliminardatos"])) {
    $sqlEliminar = "DELETE FROM ventas WHERE Folio = '$fol'";
    
    if (mysqli_query($enlace, $sqlEliminar)) {
        header("Location: RegistroVentas.php");
        exit;
    } else {
        echo "Error: " . $sqlEliminar . "<br>" . mysqli_error($enlace);
    }
}
?>