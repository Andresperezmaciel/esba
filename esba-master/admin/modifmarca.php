<?php
    
    include("includes/configadm.php");
    session_start();

    if(isset($_SESSION['usuario'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM marca";
        $result = $conexion->query($query);

        $query2 = "SELECT * FROM marca WHERE id = $id";
        $result2 = $conexion->query($query2);
        $record = $result2->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Modificacion de Marca</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            <h4 class="text-center">Modificacion de Marca</h4>
                        </div>
                        <form method="POST" action="includes/validarmodifmarca.php">
                            <div class="row gy-3 overflow-hidden">
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="" required>
                                <label for="marca" class="form-label" name="marca"><?php echo $record['nombre'] ?></label>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="col-6">
                                <div class="d-grid">
                                <button class="btn btn-dark btn-lg" type="submit" name="modif">Modificar</button>
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