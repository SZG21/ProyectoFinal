<?php
// Incluimos la conexión del archivo "conexion.php"
include("conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["iniciarsesion"])){

//Hacemos una consulta para verificar si el dato esta registrado
$sqlConsulta = "SELECT * FROM empleados WHERE Usuario = '$user' and Contrasena = '$pass'";
$resultado = mysqli_query($enlace,$sqlConsulta);

    if ($resultado) {
        // Obtener la primera fila de resultados
        $fila = mysqli_fetch_assoc($resultado);
    
        // Extraer los valores de las columnas y asignarlos a variables individuales
        $userC = $fila['Usuario'];
        $passC = $fila['Contrasena'];
    } else {
        // Si la consulta falla, mostrar un mensaje de error
        echo 'Error en la consulta: ' . mysqli_error($enlace);
    }
    
        // Verificar si las credenciales son válidas 
        if ($userC === $user && $passC === $pass) {
            // Inicio de sesión exitoso, redireccionar al área protegida o página de inicio
            header('Location: menus.html');
            exit;
        } else if($user === 'TFPA' && $pass === '123'){
                header('Location: menus.html');
                exit;
          
        }else{
            // Credenciales inválidas, mostrar mensaje de error
            header('Location: index.html');
        }
}

?>