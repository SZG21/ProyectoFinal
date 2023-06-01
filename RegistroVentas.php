<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registro Ventas</title>
   <link rel="stylesheet" href="Style2.css">
   
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

        <div class="title">Ventas</div>

        <form name="MetodosVentas" action="MetodosVentas.php" method="post">
            <table border="1">
            
            <tr>
                <td><label>Folio</label></td><td><input type="text" value="" maxlength="7" size="25" name="folVenta" placeholder="Folio"></td>
                <td><label>Empleado</label></td><td colspan="4"><input type="text" value="" maxlength="70" size="30" name="nomempleadoVenta" placeholder="Empleado"></td>
            </tr>
            <tr>
                <td><label>Nombre</label></td><td><input type="text" value="" maxlength="50" size="25" name="nomVenta" placeholder="Nombre"></td>
                <td><label>Cantidad</label></td><td colspan="4"><input type="text" value="" maxlength="20" size="30" name="cantVenta" placeholder="Cantidad"></td>
            </tr>
            <tr>
                <td><label>Precio</label></td><td><input type="text" value="" maxlength="100" size="25" name="precVenta" placeholder="Precio"></td>
                <td><label>Cliente</label></td><td colspan="4"><input type="text" value="" maxlength="100" size="30" name="clienteVenta" placeholder="Cliente"></td>
            </tr>
            
            <tr><td colspan="7">
            <input type="submit" src="img/limpiar.png" style="margin-right: 115px;" height="50" width="50" name="limpiardatos" value="Limpiar" />
            <input type="submit" src="img/insertar.png" style="margin-right: 115px;" height="50" width="50" name="insertardatos" value="Insertar"/> 
            <input type="submit" src="img/editar.png" style="margin-right: 115px;" height="50" width="50" name="modificardatos" value="Modificar"/> 
            <input type="submit" src="img/eliminar.png" style="margin-right: 0px;" height="50" width="50" name="eliminardatos" value="Eliminar"/> 
            </td>
            </tr>
            
            <tr><td colspan="7"><label>Lista de Ventas</label></td></tr>
            
            <tr><td><label>Folio</label></td>
                <td><label>Nombre</label></td>
                <td><label>Precio</label></td>
                <td><label>Empleado</label></td> 
                <td><label>Cantidad</label></td>  
                <td><label>Cliente</label></td>  
                <td><label>Total</label></td>
                </tr>
    
                <?php
            include("conexion.php");
        $sql = "SELECT * FROM ventas";
        $result = mysqli_query($enlace,$sql);

        while($mostrar = mysqli_fetch_array($result))
        {
        ?>
        <tr> <td><?php echo $mostrar['Folio'] ?>
             <td><?php echo $mostrar['Nombre'] ?>
             <td><?php echo $mostrar['Precio'] ?>
             <td><?php echo $mostrar['Empleado'] ?>
             <td><?php echo $mostrar['Cantidad'] ?>
             <td><?php echo $mostrar['Cliente'] ?>
             <td><?php echo $mostrar['Total'] ?>
        </tr>

        <?php
        }
        ?>

        </table>

        

    </form>

    </div>
    <div class="button-container">
        <a href="menus.html"><img src="Imagenes/Regreso.png" height="90" width="90"></a>
        </div>
</body>
</html>