<?php

include "conexion.php";

$sql="SELECT * FROM roles";

$roles=[];

$resultado=mysqli_query($conexion,$sql);

while($datosProvenientesBaseDedatos=mysqli_fetch_assoc($resultado)){
    $roles[]=$datosProvenientesBaseDedatos;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Roles</h1>

    <table class="table">  
        <a href="">Agregar Rol</a>
       <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>ACCIONES</td>
       </tr> 
    <?php foreach($roles as $rol){ ?>
        <tr>
            <td><?=$rol["id"]?></td>
            <td><?=$rol["nombre"]?></td>
            <td><a href="">Editar Roles</a> 
            <a href="">Eliminar Roles</a>
        </td>
        </tr>
        <?php }?>

    </table>
    
</body>
</html>