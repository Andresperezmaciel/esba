<?php

include("configadm.php");
if (isset($_GET['marca_id'])) {
    $marcaId = $_GET['marca_id'];

    // Obtener los productos de la marca seleccionada
    $stmt = $conexion->prepare("SELECT * FROM tipo_producto WHERE id_marca = ?");
    $stmt->bind_param("i", $marcaId);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
    }

    $stmt->close();
    $conn->close();
}
?>