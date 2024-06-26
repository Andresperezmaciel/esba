<?php

include("includes/configuser.php");
session_start();
if(isset($_SESSION['usuario'])) {

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = array();
}

  // Gestionar acciones del carrito
if (isset($_GET['action'])) {
  switch ($_GET['action']) {
      case 'add':
          $id = intval($_GET['id']);
          if (!isset($_SESSION['carrito'][$id])) {
              $sql = "SELECT * FROM producto WHERE id = $id";
              $result = $conexion->query($sql);
              if ($result->num_rows > 0) {
                  $producto = $result->fetch_assoc();
                  $_SESSION['carrito'][$id] = array(
                      'descripcion' => $producto['descripcion'],
                      'precio' => $producto['precio'],
                      'cantidad' => 1
                  );
              }
          } else {
              $_SESSION['carrito'][$id]['cantidad']++;
          }
          break;
      case 'remove':
          $id = intval($_GET['id']);
          if (isset($_SESSION['carrito'][$id])) {
              unset($_SESSION['carrito'][$id]);
          }
          break;
      case 'update':
          foreach ($_POST['cantidad'] as $id => $cantidad) {
              $_SESSION['carrito'][$id]['cantidad'] = $cantidad;
          }
          break;
  }
}

// Calcular el total
$total = 0;
foreach ($_SESSION['carrito'] as $producto) {
  $total += $producto['precio'] * $producto['cantidad'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rimberio | Carrito</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <!-- Header -->
    <?php include("includes/header.php"); ?>

    <!-- Tienda -->
    <main>
    <h1>Carrito de Compras</h1>
    <table border="1">
        <tr>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acción</th>
        </tr>
        <?php
        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $id => $producto) {
                ?>  <tr>
                    <td><?php echo $producto['descripcion']; ?> </td>
                    <td><?php echo $producto['precio']; ?> </td>
                    <td>
                        <form action='carrito.php?action=update' method='POST'>
                          <input type='number' name='cantidad<?php echo $id;?>' value='<?php echo $producto['cantidad']; ?>' min='1'>
                        </form>
                    </td>
                    <td><?php echo ($producto['precio'] * $producto['cantidad']); ?></td>
                    <td><a href='carrito.php?action=remove&id=<?php echo $id ?>'>Eliminar</a></td>
                </tr>
            <?php }?>
              <tr>
                <td colspan='3'><b>Total</b></td>
                <td><b><?php echo $total; ?></b></td>
                <td><input type='submit' value='Actualizar'></form></td>
              </tr>
      <?php  } else {
          ?><tr><td colspan='5'>El carrito está vacío</td></tr> <?php
        }
        ?>
    </table>
    <br>
    <a href="tienda.php">Volver a la tienda</a>
    </main>
    <?php $conexion->close();?>
    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
<?php

}else{
  header("Location:http://localhost/esba-master/login.php");
  exit;
}

?>