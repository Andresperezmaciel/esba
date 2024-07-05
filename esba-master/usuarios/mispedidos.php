<?php

include("includes/configuser.php");
session_start();

error_reporting(0);

if(isset($_SESSION['usuario'])) {

// OBTENER ID DEL USUARIO QUE ESTÁ EN LA SESIÓN
$usuario = $_SESSION['usuario'];
$sql1 = "SELECT * FROM users WHERE usuario = '$usuario'";
$resultado = $conexion->query($sql1);
while($row=$resultado->fetch_assoc()){
  $id = $row['id'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rimberio | Mis Pedidos</title>
    <link rel="icon" href="../image/favicon.png">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER -->
    <?php include("includes/header.php");?>


    <main><br><br>
    <h1 style="text-align:center">Mis Pedidos</h1>
    
        <?php //SE REALIZA LA CONSULTA PARA SABER LOS DATOS DEL PEDIDO DEL USUARIO QUE ESTÁ EN SESIÓN
         $query=mysqli_query($conexion,"SELECT pe.id, pe.direccion, pe.cantidad, pe.ubicacion, pe.total, pe.fecha, pe.estado,
                                producto.descripcion AS producto
                                FROM pedidos pe
                                JOIN producto ON pe.producto_id = producto.id
                                WHERE usuario_id = '$id'");

            if($query -> num_rows > 0){ ?>
            <table border="1">
              <tr>
                <th>Pedido</th>
                <th>Producto</th>
                <th>Ubicación</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Fecha de Alta</th>
              </tr>
            <?php //SE CREAN LAS TABLAS CON LOS DATOS ENCONTRADOS
            while($row=mysqli_fetch_array($query)){     ?>           
                <tr>
                <td><?php echo$row['id']; ?></td>
                <td><?php echo$row['producto']; ?></td>
                <td><?php echo$row['ubicacion']; ?></td>
                <td><?php echo$row['cantidad']; ?></td>
                <td>$<?php echo htmlentities(number_format($row['total'], 2, ",", "."));?> </td>
                <td><?php echo$row['estado']; ?></td>
                <td><?php echo$row['fecha']; ?></td>
                </tr>
            <?php 
             }
            }else{ ?><br><br>
              <p style="text-align:center"><i class="fas fa-x fa-1x"></i> No se encontraron pedidos.</p>
            <?php }
            ?>
    </table>
    </main>
  
    <!-- FOOTER -->
    <?php include("includes/footer.php");?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
<?php
}else{
  header("Location:http://localhost/esba-master/login.php");
  exit;
}


?>