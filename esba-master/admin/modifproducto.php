<?php
    
    include("includes/configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM producto";
        $result = $conexion->query($query);

        $query2 = "SELECT * FROM producto WHERE id = $id";
        $result2 = $conexion->query($query2);
        $record = $result2->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Modificación de Productos</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        // Función para mostrar alerta
        function mostrarAlerta() {
            alert("Seguro que desea modificar el producto?");
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
                            <h4 class="text-center">Modificación de Producto</h4>
                        </div>
                        <script>
                            function loadProducts(marca_id) {
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("tipo_producto").innerHTML = this.responseText;
                                    }
                                };
                                xhttp.open("GET", "includes/get_productos.php?marca_id=" + marca_id, true);
                                xhttp.send();
                            }
                        </script>
                        <form method="POST" action="includes/validarmodifproducto.php">
                            <div class="row gy-3 overflow-hidden">
                                <div class="col-7">
                                    <div class="controls">
                                        <textarea  name="descripcion" value="<?php echo$record['descripcion']; ?>" placeholder="Ingresa la Descripción del Producto" rows="6" class="span8 tip" required></textarea>  
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" name="precio" id="precio" placeholder="" required>
                                        <label for="precio" class="form-label" name="precio"><?php echo$record['precio']; ?></label>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <label for="stock_central" name="stock_central">Cantidad de stock en Casa Central</label>
                                    <input type="number" for="stock_central" name="stock_central" value="<?php echo$record['stock_central']; ?>">
                                </div>
                                <div class="col-7">
                                    <label for="stock_cordoba" name="stock_cordoba">Cantidad de stock en Córdoba</label>
                                    <input type="number" for="stock_cordoba" name="stock_cordoba" value="<?php echo$record['stock_cordoba']; ?>">
                                </div>
                                <div class="col-7">
                                    <label for="stock_rosario" name="stock_rosario">Cantidad de stock en Rosario</label>
                                    <input type="number" for="stock_rosario" name="stock_rosario" value="<?php echo$record['stock_rosario']; ?>">
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="col-6">
                                <div class="d-grid">
                                <button class="btn btn-dark btn-lg" type="submit" name="modificar" onClick="mostrarAlerta()">Modificar</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->

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