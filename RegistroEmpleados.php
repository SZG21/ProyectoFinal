<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registro Empleados</title>
   <link rel="stylesheet" href="Style.css">

   <style>
    .button-container {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: transparent;
        border: none;
    }
</style>

</head>
<body>

    
        


    <div class="wrapper">

        <div class="title">Registro Empleados</div>

        <form name="MetodosREmpleados" action="MetodosREmpleados.php" method="post">
            <table border="1">
            
            <tr>
                <td><label>Codigo</label></td><td><input type="text" value="" maxlength="7" size="20" name="codEmpleado" placeholder="Codigo"></td>
                <td><label>Nombre Completo</label></td><td colspan="3"><input type="text" value="" maxlength="70" size="30" name="nomEmpleado" placeholder="Nombre"></td>
            </tr>
            <tr>
                <td><label>Dirección</label></td><td><input type="text" value="" maxlength="50" size="20" name="direcEmpleado" placeholder="Direccion"></td>
                <td><label>Ciudad</label></td><td colspan="3"><input type="text" value="" maxlength="20" size="30" name="ciEmpleado" placeholder="Ciudad"></td>
            </tr>
            <tr>
                <td><label>RFC</label></td><td><input type="text" value="" maxlength="100" size="20" name="rfcEmpleado" placeholder="RFC"></td>
                <td><label>Telefono</label></td><td colspan="4"><input type="text" value="" maxlength="100" size="30" name="telEmpleado" placeholder="Telefono"></td>
            </tr>
            <tr>
                <td><label>Usuario</label></td><td><input type="text" value="" maxlength="100" size="20" name="usuarioEmpleado" placeholder="Usuario"></td>
                <td><label>Contraseña</label></td><td colspan="4"><input type="text" value="" maxlength="100" size="30" name="passEmpleado" placeholder="Contraseña"></td>
            </tr>
            
            <tr><td colspan="6">
            <input type="submit" style="margin-right: 95px;" src="Imagenes/limpiar.png" style="border: double;" height="50" width="50" name="limpiardatos" value="Limpiar"/>
            <input type="submit" style="margin-right: 95px;" src="Imagenes/insertar.png" style="border: double;" height="50" width="50" name="insertardatos" value="Insertar"/> 
            <input type="submit" style="margin-right: 95px;" src="Imagenes/editar.png" style="border: double;" height="50" width="50"name="modificardatos" value="Modificar"/> 
            <input type="submit" src="Imagenes/eliminar.png"  height="50" width="50" name="eliminardatos" value="Eliminar"/> 
            </td>
            </tr>
            
            <tr><td colspan="6"><label>Listado de Empleados </label></td></tr>
            
            <tr><td><label>Codigo</label></td>
                <td><label>Nombre Completo</label></td>
                <td><label>Dirección</label></td>  
                <td><label>Ciudad</label></td> 
                <td><label>RFC</label></td> 
                <td><label>Telefono</label></td>
            </tr>

                <?php
            include("conexion.php");
        $sql = "SELECT * FROM empleados";
        $result = mysqli_query($enlace,$sql);

        while($mostrar = mysqli_fetch_array($result))
        {
        ?>
        <tr> <td><?php echo $mostrar['Codigo'] ?>
             <td><?php echo $mostrar['Nombre'] ?>
             <td><?php echo $mostrar['Direccion'] ?>
             <td><?php echo $mostrar['Ciudad'] ?>
             <td><?php echo $mostrar['RFC'] ?>
             <td><?php echo $mostrar['Telefono'] ?>
        </tr>

        <?php
        }
        ?>

        </table>

        <div class="button-container">
        <a href="menus.html"><img src="Imagenes/Regreso.png" height="90" width="90"></a>
        </div>

    </form>
    </div>
</body>
</html>