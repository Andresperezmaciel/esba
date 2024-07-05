<?php

include("configuser.php");

session_start();

// VERIFICAR SI EL ID DEL USUARIO QUE ESTÁ EN LA SESIÓN
if (!isset($_SESSION['usuario'])) {
    die("Usuario no autenticado.");
}

// OBTENER ID DEL USUARIO QUE ESTÁ EN LA SESIÓN
$usuario = $_SESSION['usuario'];
$sql1 = "SELECT * FROM users WHERE usuario = '$usuario'";
$resultado = $conexion->query($sql1);
while($row=$resultado->fetch_assoc()){
    $id = $row['id'];
}

// OBTENER DATOS DEL USUARIO DESDE LA BDD
$sql = $conexion->prepare("SELECT id, direccion, telefono, mail FROM users WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows == 0) {
    die("Datos del usuario no encontrados.");
}

$user_data = $result->fetch_assoc();
$usuario_id = $user_data['id'];
$direccion = $user_data['direccion'];
$telefono = $user_data['telefono'];
$mail = $user_data['mail'];

// OBTENER DATOS DEL CARRITO
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    foreach ($data as $producto) {
        $producto_id = $producto['id'];
        $cantidad = $producto['cantidad'];
        $precio = $producto['precio'];
        $total = $precio * $cantidad;
        $ubicacion = $producto['ubicacion'];

        // INSERTAR EL PEDIDO EN LA TABLA DE PEDIDOS DE LA BDD
        $sql_insert = $conexion->prepare("INSERT INTO pedidos (producto_id, usuario_id, direccion, telefono, mail, ubicacion, total, cantidad)
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sql_insert->bind_param("iisssssd", $producto_id, $usuario_id, $direccion, $telefono, $mail, $ubicacion, $total, $cantidad);

        if ($sql_insert->execute()) {
            // ACTUALIZAR STOCK EN LA BDD
            if ($ubicacion == 'central') {
                $sql_stock = $conexion->prepare("UPDATE producto SET stock_central = stock_central - ? WHERE id = ?");
            } elseif ($ubicacion == 'cordoba') {
                $sql_stock = $conexion->prepare("UPDATE producto SET stock_cordoba = stock_cordoba - ? WHERE id = ?");
            } elseif ($ubicacion == 'rosario') {
                $sql_stock = $conexion->prepare("UPDATE producto SET stock_rosario = stock_rosario - ? WHERE id = ?");
            }

            $sql_stock->bind_param("ii", $cantidad, $producto_id);
            $sql_stock->execute();
        } else {
            echo "Error: " . $sql_insert->error;
        }
    }

    echo "Compra realizada con éxito!";
} else {
    echo "El carrito está vacío.";
}

$conexion->close();

?>