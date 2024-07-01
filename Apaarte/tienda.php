<?php

include("includes/configuser.php");
session_start();

if(isset($_SESSION['usuario'])) {

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rimberio | Tienda</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="../image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <!-- Header -->
    <?php include("includes/header.php"); ?>

  <!-- Tienda -->
      <main>
        <section class="" id="buscador" style="padding-top: 40px;">
            <div class="container text-center justify-content-center">
                <div class="group-title">
					<h3 style="margin-bottom:30px" class="titulobuscador">Buscador de productos</h3>
				</div>
        <div class="default-form-area">
					<form id="form-catalogo" name="contact_form" class="default-form" action="" method="GET">
						<div class="row clearfix">
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
                  <select name="marca" class="span8 tip">
                    <option value="">Seleccione Marca</option> 
                    <?php $query=mysqli_query($conexion,"SELECT * FROM marca");
                    while($row=mysqli_fetch_array($query))
                    {?>
                    <option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></option>
                    <?php } ?>
                  </select>
								</div>
							</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="form-group style-two">
                <select name="tipo" class="span8 tip">
                  <option value="">Seleccione Tipo de Producto</option>
                  <?php
                  $query=mysqli_query($conexion,"SELECT DISTINCT nombre FROM tipo_producto");
                  while($row=mysqli_fetch_array($query))
                  {?>
                  <option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></option>
                  <?php } ?>
                </select>
              </div>
						</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="busqueda" class="form-control" placeholder="Descripción">
								</div>
							</div> 
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="form-group style-two">
									<button class="thm-btn thm-color" type="submit" name="buscar">Buscar</button>
								</div>
							</div>   
						</div>
					</form>
				</div>
      </div><br><br><br>
            <!-- Items que aparecen en el buscador -->       
       <?php
       if(isset($_GET['buscar'])){
          $sql = "SELECT producto.id, producto.descripcion, producto.precio, producto.stock_central, producto.stock_cordoba, producto.stock_rosario,
          tipo_producto.nombre AS tipo, marca.nombre AS marca
          FROM producto
          JOIN tipo_producto ON producto.id_tipo_producto = tipo_producto.id
          JOIN marca ON producto.id_marca = marca.id
          WHERE 1=1";

          if (!empty($_GET['busqueda'])) {
            $descripcion = $_GET['busqueda'];
            $sql .= " AND producto.descripcion LIKE '%$descripcion%'";
          }

          if (!empty($_GET['marca'])) {
            $marca = $_GET['marca'];
            $sql .= " AND marca.nombre = '$marca'";
          }

          if (!empty($_GET['tipo'])) {
            $tipo = $_GET['tipo'];
            $sql .= " AND tipo_producto.nombre = '$tipo'";
          }

          // Ejecutar la consulta
          $resultado = $conexion->query($sql);
          // Mostrar los resultados
          if ($resultado->num_rows > 0) {?>
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <?php
                    
                    while ($row = $resultado->fetch_assoc()) {

                      $id = $row['id'];
                      $imagen = $row['imagen'];
                      

                      //EN CASO DE QUE NO EXISTA UNA FOTO, SE COLOCA UNA PREDETERMINADA
                      if(!file_exists($imagen)){
                        $imagen = "img/no-photo.png";
                      }
                  ?>
                <div class="col-md-4">
                  <div class="card">
                    
                      <img src="data:image/jpg;base64",<?php echo base64_encode($row['imagen']) ?>>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row['marca'] . ' | ' . $row['tipo'];?> </h5>

                        <p class="card-text"><?php echo $row['descripcion']; ?></p>
                        <p class="card-text">$<?php echo number_format($row['precio'], 2, ",", "."); ?></p>
                        <?php if($row['stock_central']>0){
                                ?><p class="card-text">Stock Central: <?php echo $row['stock_central']; ?></p><?php
                              }?>
                        <?php if($row['stock_cordoba']>0){
                                ?><p class="card-text">Stock Cordoba: <?php echo $row['stock_cordoba']; ?></p><?php
                              }?>
                        <?php if($row['stock_rosario']>0){
                                ?><p class="card-text">Stock Rosario: <?php echo $row['stock_rosario']; ?></p><?php
                              }?>
                        <div class="d-flex justify-content-between align-items-center">
                          <?php if($row['stock_central']<1 && $row['stock_cordoba']<1 && $row['stock_rosario']<1){?>
                          <a href="" class="btn btn-secondary disabled">SIN STOCK</a>
                          <?php }else{?>
                            <a href="carrito.php?action=add$id=<?php echo $row['id']?>" class="btn btn-outline-success">Agregar al Carrito</a>
                            <?php } ?>
                        </div>
                      </div>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
  <?php }else{?>
          <p style="text-align:center">No se encontraron resultados.</p>
  <?php }
      }
      ?><br><br>
    </section>
  </main>
    
    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
<?php

}else{
  header("Location:http://localhost/esba-master/login.php");
  exit;
}

?>