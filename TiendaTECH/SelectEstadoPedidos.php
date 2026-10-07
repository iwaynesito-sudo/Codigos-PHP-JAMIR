<?php

include "conexion.php";
$sql = "SELECT * FROM estados_pedido";
$estados = [];

$resultado = mysqli_query($conexion, $sql);

while ($datoProvenienteDeBaseDato = mysqli_fetch_assoc($resultado)) {
    $estados[] = $datoProvenienteDeBaseDato;
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
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>ACCIONES</td>
        </tr>

        <?php foreach ($estados as $estado) { ?>
            <tr>
                <td><?= $estado["id"] ?></td>
                <td><?= $estado["nombre"] ?></td>
                <td><a href="">Editar estados del pedido</a> <a href=""> Eliminar estados de pedido</a></td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>