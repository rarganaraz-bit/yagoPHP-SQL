<?php
include "config.php";
$query = "SELECT * FROM pedidos";
$resultado = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Pedidos</title></head>
<body>
    <h1>Lista de Pedidos</h1>
    <table border="1">
        <tr><th>ID Pedido</th><th>ID Cliente</th><th>Fecha</th><th>Total</th></tr>
        <?php while($row = mysqli_fetch_row($resultado)) { ?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br><a href="index.php">Volver</a>
</body>
</html>
