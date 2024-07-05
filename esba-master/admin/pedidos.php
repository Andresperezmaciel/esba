<?php
    
    include("includes/configadm.php");
    session_start();

    if(isset($_SESSION['usuario'])) {
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Pedidos</title>
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
            <div class="row justify-content-center text-center">
                <div class="col-md-3">
                    <?php include("includes/menuadm.php");?>
                    <div class="col-md-9">
                        <form id="form-catalogo" name="contact_form" class="default-form" action="" method="GET">
						    <div class="row clearfix">
							    <div class="col-md-3 col-sm-3 col-xs-12">
								    <div class="form-group style-two">
                                        <select name="estado" class="span8 tip">
                                            <option value="">Todos</option> 
                                            <option value="En Proceso">En Proceso</option>
                                            <option value="En Camino">En Camino</option>
                                            <option value="Rechazado">Rechazado</option>
                                            <option value="Entregado">Entregado</option>
                                        </select>
                                    </div>
							    </div>
							    <div class="col-md-3 col-sm-3 col-xs-12">
								    <div class="form-group style-two">
									    <button class="thm-btn thm-color" type="submit" name="buscar">Buscar</button>
			    					</div>
				    			</div>   
					    	</div>
					    </form>
                    <?php   
                    
                    if(isset($_GET['buscar'])){

                                $sql = "SELECT P.id, P.direccion, P.mail, P.telefono, P.cantidad, P.ubicacion, P.total, P.fecha, P.estado,
                                    producto.descripcion AS producto, users.nombre_empresa AS empresa
                                    FROM pedidos P
                                    JOIN producto ON P.producto_id = producto.id
                                    JOIN users ON P.usuario_id = users.id
                                    WHERE 1=1";
                                //EN CASO DE QUE SE HAYA PUESTO UN FILTRO EN LA BUSQUEDA, SE TOMA ESE DATO PUESTO
                                if (!empty($_GET['estado'])) {
                                    $estado = $_GET['estado'];
                                    $sql .= " AND P.estado LIKE '%$estado%'";
                                } 
                                $resultado = $conexion->query($sql);

                                if ($resultado->num_rows > 0) {?>

                            <div class="mb-3"><br><br>
                                <h4 class="text-center">Pedidos</h4>
                            </div>
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Producto</th>
                                        <th>Empresa</th>
                                        <th>Direccion</th>
                                        <th>Mail</th>
                                        <th>Telefono</th>
                                        <th>Cantidad</th>
                                        <th>Ubicacion</th>
                                        <th>Total</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row= $resultado->fetch_assoc())
                                {
                                ?>									
                                <tr>
                                    <td> <?php echo htmlentities($row['id']);?> </td>
                                    <td> <?php echo htmlentities($row['producto']);?> </td>
                                    <td> <?php echo htmlentities($row['empresa']);?> </td>
                                    <td> <?php echo htmlentities($row['direccion']);?> </td>
                                    <td> <?php echo htmlentities($row['mail']);?> </td>
                                    <td> <?php echo htmlentities($row['telefono']);?> </td>
                                    <td> <?php echo htmlentities($row['cantidad']);?> </td>
                                    <td> <?php echo htmlentities($row['ubicacion']);?> </td>
                                    <td>$<?php echo htmlentities(number_format($row['total'], 2, ",", "."));?> </td>
                                    <td> <?php echo htmlentities($row['fecha']);?> </td>
                                    <td> <?php echo htmlentities($row['estado']);?> </td>
                                    <td> <a href="modifestado.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil fa-1x"></i></a> </td>
                                <?php } ?>

                        </table>
                        <?php }else{?><br><br><br><br>
                            <p style="text-align:center">No se encontraron resultados.</p>
                        <?php } ?>
					</div>
                    <?php } ?>
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