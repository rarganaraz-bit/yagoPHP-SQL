<?php
include 'config.php';
$query = "SELECT * FROM clientes";
$resultado = mysqli_query($conexion, $query);
?>
<!DOCTYPE html>
<html>
<head><title>Clientes</title></head>
<body>
    <h1>Lista de Clientes</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <a href="index.php">Volver al menú</a>
</body>
</html>
