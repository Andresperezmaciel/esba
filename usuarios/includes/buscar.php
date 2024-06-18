<?php 

 include("configuser.php");

 if(isset($_SESSION['usuario'])){

    if(isset($_POST['buscar'])){
        $buscar = isset($_GET['buscar']) ? $_GET['buscar'] : '';
$categoria = isset($_GET['marca']) ? $_GET['marca'] : 'todos';

// Función para escapar las entradas del usuario
function escape_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$buscar = escape_input($buscar);

// Construir la consulta SQL según la categoría seleccionada
$sql = "";
if ($marca == 'marca') {
    $sql = "SELECT nombre FROM marca WHERE nombre LIKE ?";
} elseif ($categoria == 'tipo_producto') {
    $sql = "SELECT tipo_producto.nombre, marca.nombre AS marca, productos.tipo, productos.precio 
            FROM producto 
            JOIN marca ON producto.marca_id = id_marca 
            WHERE producto.nombre LIKE ? OR marca.nombre LIKE ? OR tipo_producto LIKE ?";
} else {
    $sql = "(SELECT nombre AS resultado, 'Marca' AS tipo FROM marca WHERE nombre LIKE ?) 
            UNION 
            (SELECT producto.nombre AS resultado, 'Producto' AS tipo 
             FROM producto 
             JOIN marca ON producto.id_marca = marcas.id 
             WHERE tipo_producto.nombre LIKE ? OR marca.nombre LIKE ? OR tipo_productos.nombre LIKE ?)";
}

// Preparar y ejecutar la consulta
$stmt = $conexion->prepare($sql);
if ($categoria == 'marca') {
    $param = "%$buscar%";
    $stmt->bind_param("s", $param);
} elseif ($categoria == 'producto') {
    $param = "%$busqueda%";
    $stmt->bind_param("sss", $param, $param, $param);
} else {
    $param = "%$busqueda%";
    $stmt->bind_param("ssss", $param, $param, $param, $param);
}
$stmt->execute();
$result = $stmt->get_result();

// Mostrar los resultados
if ($result->num_rows > 0) {
    echo "<h2>Resultados de búsqueda:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        if ($categoria == 'marcas') {
            echo "<li>Marca: " . $row["nombre"] . "</li>";
        } elseif ($categoria == 'productos') {
            echo "<li>Producto: " . $row["nombre"] . " - Marca: " . $row["marca"] . " - Tipo: " . $row["tipo"] . " - $" . $row["precio"] . "</li>";
        } else {
            echo "<li>" . $row["resultado"] . " (" . $row["tipo"] . ")</li>";
        }
    }
    echo "</ul>";
} else {
    echo "No se encontraron resultados.";
}

$stmt->close();
$conn->close();
?><?php
    }


 }

?>