<?php

include "conexion.php";

$sql = "SELECT * FROM usuarios ";

$usuarios=[];




$resultado = mysqli_query($conexion, $sql,);




while ($datos = mysqli_fetch_assoc($resultado)) {
    
  $usuarios[]= $datos;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
     <h1>Lista De usuarios</h1 align-text="center">

  

    <table class="table">
        <a href="AgregarUsuario.php">Agregar Nuevo Usuario</a> 
        <tr >
            <td>ID</td>
            <td>NOMBRE</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            <td>ROL_ID</td>
            <td>ACCIONES</td>
        </tr>
        <?php foreach($usuarios as $usuarios) { ?>
            <tr>
                <td><?=$usuarios["id"]?></td>
                <td><?=$usuarios["nombre"]?></td>
                <td><?=$usuarios["email"]?></td>
                <td><?=$usuarios["password"]?></td>
                <td><?=$usuarios["rol_id"]?></td>
                <td><a href="EditarUsuario.php">Editar Usuario</a>
                <a href="EliminarUsuario.php">Eliminar Usuario</a>
                                </td>
                
            </tr>
            
            
             

        <?php }?>
    </table>
    
   
    
    

    
</body>
</html>