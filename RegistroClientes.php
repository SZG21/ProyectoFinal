<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registro Clientes</title>
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

        <div class="title">Registro Clientes</div>

        <form name="MetodosRClientes" action="MetodosRClientes.php" method="post">
            <table border="1">
            
            <tr>
                <td><label>Codigo</label></td><td><input type="text" value="" maxlength="7" size="20" name="codCliente" placeholder="Codigo"></td>
                <td><label>Nombre Completo</label></td><td colspan="2"><input type="text" value="" maxlength="70" size="30" name="nomCliente" placeholder="Nombre"></td>
            </tr>
            <tr>
                <td><label>Dirección</label></td><td><input type="text" value="" maxlength="50" size="20" name="direcCliente" placeholder="Direccion"></td>
                <td><label>Ciudad</label></td><td colspan="2"><input type="text" value="" maxlength="20" size="30" name="ciCliente" placeholder="Ciudad"></td>
            </tr>
            <tr>
                <td><label>Telefono</label></td><td colspan="4"><input type="text" value="" maxlength="100" size="30" name="telCliente" placeholder="Telefono"></td>
            </tr>
            
            <tr><td colspan="5">
            <input type="submit" style="margin-right: 96px;" src="imagenes/limpiar.png" style="border: double;" height="50" width="50" name="limpiardatos" value="Limpiar"/>
            <input type="submit" style="margin-right: 96px;" style="border: double;" height="50" width="50" name="insertardatos" value="Insertar"/> 
            <input type="submit" style="margin-right: 96px;"  src="imagenes/editar.png" style="border: double;" height="50" width="50" name="modificardatos" value="Modificar"/> 
            <input type="submit" style="margin-right: 0px;" src="imagenes/eliminar.png" style="border: double;" height="50" width="50" name="eliminardatos" value="Eliminar"/> 
            </td>
            </tr>
            
            <tr><td colspan="5"><label>Listado de Clientes </label></td></tr>
            
            <tr><td><label>Codigo</label></td>
                <td><label>Nombre</label></td>
                <td><label>Dirección</label></td> 
                <td><label>Ciudad</label></td>  
                <td><label>Telefono</label></td>
            </tr>

            <?php
            include("conexion.php");
        $sql = "SELECT * FROM clientes";
        $result = mysqli_query($enlace,$sql);

        while($mostrar = mysqli_fetch_array($result))
        {
        ?>
        <tr> <td><?php echo $mostrar['Codigo'] ?>
             <td><?php echo $mostrar['Nombre'] ?>
             <td><?php echo $mostrar['Direccion'] ?>
             <td><?php echo $mostrar['Ciudad'] ?>
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