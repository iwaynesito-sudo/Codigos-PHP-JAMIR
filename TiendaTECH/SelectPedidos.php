<?php

include "conexion.php";
$sql = "SELECT * FROM pedidos";
$pedidos = [];

$resultado = mysqli_query($conexion, $sql);

while ($datosProvenientesBaseDedatos = mysqli_fetch_assoc($resultado)) {
    $pedidos[] = $datosProvenientesBaseDedatos;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <h1>Tabla de pedidos</h1>
        <a href="">Agregar Pedido</a>
        <tr>
            <td>ID</td>
            <td>USUARIO_ID</td>
            <td>ESTADO_ID</td>
            <td>FECHA</td>
            <td>ACCIONES</td>

        </tr>
        <?php foreach ($pedidos as $pedido) { ?>
            <tr>
                <td><?= $pedido["id"] ?></td>
                <td><?= $pedido["usuario_id"] ?></td>
                <td><?= $pedido["estado_id"] ?></td>
                <td><?= $pedido["fecha"] ?></td>
                <td><a href="">Editar Pedido</a> <a href=""> Eliminar Pedido</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>