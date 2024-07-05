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
    <title>Admin | Marca</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        // Función para mostrar alerta
        function mostrarAlerta() {
            alert("Seguro que desea registrar la marca?");
        }
        function mostrarAlerta2(){
            alert("Seguro que desea eliminar la marca?");
        }
    </script>
  </head>
  
<body class="bg-body-tertiary">
    
    <?php include("includes/headeradm.php"); ?>

    <br><br>
    <main>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-3">
                    <?php include("includes/menuadm.php");?>
                    <div class="col-md-9">
                        <div class="mb-3">
                            <h4 class="text-center">Alta de Marca</h4>
                        </div>
                        <form method="POST" action="includes/validaraltamarca.php">
                            <div class="row gy-3 overflow-hidden justify-content-center text-center">
                            <div class="col-7">
                                <div class="form-floating mb-1">
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="" required>
                                <label for="marca" class="form-label" name="marca">Ingrese una marca nueva</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <br><br>
                                <div class="justify-content-center text-center">
                                <button class="btn btn-dark btn-lg btn-registrar" type="submit" name="registrar" onClick="mostrarAlerta()">Registrar</button>
                                </div>
                            </div>
                            </div>
                            <br><br>
                        </form>
                        <div class="mb-3">
                            <h4 class="justify-content-center text-center">Bajas/Modificaciones Marcas</h4>
                        </div>
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
							<thead>
								<tr>
								    <th>#</th>
									<th> Marca</th>
								</tr>
							</thead>
						    <tbody>
                            <?php $query=mysqli_query($conexion,"SELECT * FROM marca");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>									
							<tr>
								<td><?php echo htmlentities($row['id']);?></td>
								<td><?php echo htmlentities($row['nombre']);?></td>
                                <td><a href="includes/validarbajamarca.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onClick="mostrarAlerta2()"><i class="fas fa-x fa-1x"></i></a></td>
                                <td><a href="modifmarca.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil fa-1x"></i></a></td>
							<?php } ?>

                        </table>
					</div>
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