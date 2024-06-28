<?php

include("configuser.php");

// Obtener datos del carrito desde el cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
  // Procesar cada producto en el carrito
  foreach ($data as $id => $producto) {
    $cantidad = $producto['cantidad'];
        $ubicacion = $producto['ubicacion'];
        
        // Actualizar el stock en la base de datos
        if ($ubicacion == 'central') {
            $sql = "UPDATE producto SET stock_central = stock_central - $cantidad WHERE id = $id";
        } elseif ($ubicacion == 'cordoba') {
            $sql = "UPDATE producto SET stock_cordoba = stock_cordoba - $cantidad WHERE id = $id";
        } elseif ($ubicacion == 'rosario') {
            $sql = "UPDATE producto SET stock_rosario = stock_rosario - $cantidad WHERE id = $id";
        }

        $conexion->query($sql);
    }

    echo "Compra realizada con éxito!";
} else {
    echo "El carrito está vacío.";
}

$conexion->close();
?>