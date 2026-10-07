<?php

include "conexion.php";
$sql = "SELECT * FROM productos ";
$productos=[];




$resultado = mysqli_query($conexion, $sql);




while ($datos = mysqli_fetch_assoc($resultado)) {
    
  $productos[]= $datos;
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
     <h1>Lista De productos</h1 align-text="center">

  

    <table class="table">
        <a href="">Agregar Producto</a> 
        <tr >
            <td>ID</td>
            <td>CATEGORIA_ID</td>
            <td>NOMBRE</td>
            <td>DESCRIPCION</td>
            <td>PRECIO</td>
            <td>STOCK</td>
            <td>IMAGEN</td>
            <td>EDITAR</td>
            <td>ELIMINAR</td>
        </tr>
        <?php foreach($productos as $productos) { ?>
            <tr>
                <td><?=$productos["id"]?></td>
                <td><?=$productos["categoria_id"]?></td>
                <td><?=$productos["nombre"]?></td>
                <td><?=$productos["descripcion"]?></td>
                <td><?=$productos["precio"]?></td>
                <td><?=$productos["stock"]?></td>
                <td><?=$productos["imagen"]?></td>
                <td><a href="">Editar producto</a></td>
                <td><a href="">Eliminar producto</a></td>
                
                
            </tr>
            
            
             

        <?php }?>
    </table>
    
   
    
    

    
</body>
</html>