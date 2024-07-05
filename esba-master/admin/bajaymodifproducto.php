<?php
    
    include("includes/configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Baja/Modif Productos</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        // Función para mostrar alerta
        function mostrarAlerta() {
            alert("Seguro que desea eliminar el producto?");
        }
    </script>
  </head>
  
<body class="bg-body-tertiary">
    
    <?php include("includes/headeradm.php"); ?>

    <br><br>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php include("includes/menuadm.php");?>
                    <div class="col-md-9">
                        <div class="mb-3">
                            <h4 class="text-center">Bajas/Modificaciones de Productos</h4>
                        </div>
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
							<thead>
								<tr>
								    <th>#</th>
									<th>Marca</th>
									<th>Tipo de Producto</th>
									<th>Descripción</th>
									<th>Precio</th>
									<th>Stock Casa Central</th>
									<th>Stock Córdoba</th>	
                                    <th>Stock Rosario</th>
                                    <th>Imagen</th>
								</tr>
							</thead>
						    <tbody>
                            <?php $query=mysqli_query($conexion,"SELECT producto.id, producto.descripcion, producto.precio, producto.stock_central, producto.stock_cordoba, producto.stock_rosario,
                                tipo_producto.nombre AS tipo, marca.nombre AS marca
                                FROM producto
                                JOIN tipo_producto ON producto.id_tipo_producto = tipo_producto.id
                                JOIN marca ON producto.id_marca = marca.id
                                WHERE 1=1");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>									
							<tr>
								<td> <?php echo htmlentities($row['id']);?> </td>
								<td> <?php echo htmlentities($row['marca']);?> </td>
								<td> <?php echo htmlentities($row['tipo']);?> </td>
								<td> <?php echo htmlentities($row['descripcion']);?> </td>
								<td>$<?php echo htmlentities(number_format($row['precio'], 2, ",", "."));?> </td>
								<td> <?php echo htmlentities($row['stock_central']);?> </td>
								<td> <?php echo htmlentities($row['stock_cordoba']);?> </td>
                                <td> <?php echo htmlentities($row['stock_rosario']);?> </td>
                                <td> <?php echo htmlentities($row['imagen']);?> </td>
                                <td><a href="includes/validarbajaproducto.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="mostrarAlerta()"><i class="fas fa-x fa-1x"></i></a></td>
                                <td><a href="modifproducto.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil fa-1x"></i></a></td>
							<?php } ?>

                        </table>
					</div>
				</div>							
			</div>
		</div>
    </main>

    <!-- Footer -->

    <div class="footer">
		<div class="container-fluid bg-white">
			
			<b class="copyright">© 2024 Rimberio Autopartes </b> Todos los derechos reservados.
		</div>
	</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
<?php
}else {
    header("Location:index.php");
    exit;
}
?>