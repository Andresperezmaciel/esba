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
    <title>Admin | Alta Productos</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        // Función para mostrar alerta
        function mostrarAlerta() {
            alert("Seguro que desea registrar el producto?");
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
                            <h4 class="justify-content-center text-center">Alta Producto</h4>
                        </div>
                        <script>
                            //FUNCIÓN PARA LLAMAR A LOS TIPOS DE PRODUCTO DEPENDIENDO DE LA MARCA
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
                        <form method="POST" action="includes/validaraltaproducto.php">
                            <div class="row gy-3 overflow-hidden justify-content-center text-center">
                                <div class="col-7">
                                    <select id="marca" name="marca" onchange="loadProducts(this.value)">
                                        <option value="">Selecciona una marca</option>
                                        <?php
                                        // OBTENER LAS MARCAS
                                        $result = $conexion->query("SELECT * FROM marca");
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-7">
                                    <select id="tipo_producto" name="tipo_producto">
                                        <option value="">Primero selecciona una marca</option>
                                    </select>
                                </div>
                                <div class="col-7">
                                    <label class="control-label" for="">Descripción del Producto</label>
                                    <div class="controls">
                                        <textarea  name="descripcion"  placeholder="Ingresa la Descripción del Producto" rows="6" class="span8 tip"></textarea>  
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-floating mb-1 ">
                                        <input type="text" class="form-control" name="precio" id="precio" placeholder="" required>
                                        <label for="precio" class="form-label" name="precio">Precio</label>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <label for="stock_central" name="stock_central">Cantidad de stock en Casa Central</label>
                                    <input type="number" for="stock_central" name="stock_central">
                                </div>
                                <div class="col-7">
                                    <label for="stock_cordoba" name="stock_cordoba">Cantidad de stock en Córdoba</label>
                                    <input type="number" for="stock_cordoba" name="stock_cordoba">
                                </div>
                                <div class="col-7">
                                    <label for="stock_rosario" name="stock_rosario">Cantidad de stock en Rosario</label>
                                    <input type="number" for="stock_rosario" name="stock_rosario">
                                </div>
                                <div class="col-7">
                                    <label class="control-label" for="basicinput">Producto Imagen</label>
                                    <div class="controls">
                                        <input type="file" name="imagen" id="imagen" value="" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="justify-content-center text-center">
                                        <button class="btn btn-dark btn-lg btn-registrar" type="submit" onClick="mostrarAlerta()" name="registrar">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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