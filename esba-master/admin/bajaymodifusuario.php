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
    <title>Admin | Baja/Modif Usuarios</title>
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
                            <h4 class="text-center">Bajas/Modificaciones de Usuarios</h4>
                        </div>
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
							<thead>
								<tr>
								    <th>#</th>
									<th> Usuario</th>
									<th>Contraseña </th>
									<th>Nombre_Empresa</th>
									<th>Direccion</th>
									<th>Cuit</th>
									<th>Telefono</th>	
                                    <th>Mail</th>
								</tr>
							</thead>
						    <tbody>
                            <?php $query=mysqli_query($conexion,"SELECT * FROM users");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>									
							<tr>
								<td><?php echo htmlentities($row['id']);?></td>
								<td><?php echo htmlentities($row['usuario']);?></td>
								<td><?php echo htmlentities($row['contrasena']);?></td>
								<td> <?php echo htmlentities($row['nombre_empresa']);?></td>
								<td> <?php echo htmlentities($row['direccion']);?></td>
								<td> <?php echo htmlentities($row['cuit']);?></td>
								<td> <?php echo htmlentities($row['telefono']);?></td>
                                <td> <?php echo htmlentities($row['mail']);?></td>
                                <td><a href="includes/validarbajausuario.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-x fa-1x"></i></a></td>
                                <td><a href="modifusuario.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil fa-1x"></i></a></td>
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