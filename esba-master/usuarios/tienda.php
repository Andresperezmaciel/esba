<?php

include("includes/configuser.php");
session_start();

error_reporting(0);

if(isset($_SESSION['usuario'])) {
  $sqli = "SELECT * FROM producto";
  $result = $conexion->query($sqli);

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

    <script>
      //INICIALIZAR EL CARRITO
      let carrito = {};

      //FUNCIÓN PARA AGREGAR UN PRODUCTO AL CARRITO
      function agregarAlCarrito(id, descripcion, precio, ubicacion) {
        if (!carrito[id]) {
          carrito[id] = {
          id: id,
          precio: precio,
          ubicacion: ubicacion,
          cantidad: 1
        };
        } else {
          if (carrito[id].ubicacion === ubicacion) {
            carrito[id].cantidad++;
          } else {
            alert('El producto ya está en el carrito con una ubicación diferente.');
          }
        }
        actualizarCarrito();
      }

      //FUNCIÓN PARA ACTUALIZAR EL CARRITO EN EL DOM
      function actualizarCarrito() {
        const cartTable = document.getElementById('carrito');
        cartTable.innerHTML = '';

        let total = 0;
        for (const id in carrito) {
          const producto = carrito[id];
          total += producto.precio * producto.cantidad;
          cartTable.innerHTML += `<tr>
          <td name="id">${producto.id}</td>
          <td name="precio">$${producto.precio}</td>
          <td name="ubicacion">${producto.ubicacion}</td>
          <td name="cantidad"><input type='number' value='${producto.cantidad}' min='1' onchange='actualizarCantidad(${id}, this.value)'></td>
          <td name="total">${producto.precio * producto.cantidad}</td>
          <td><button class='btn btn-danger' onclick='removerDelCarrito(${id})'><i class="fas fa-trash fa-1x"></button></td>
          </tr>`;
        }
        document.getElementById('total').innerText = total;
      }

      //FUNCIÓN PARA ACTUALIZAR LA CANTIDAD DE UN PRODUCTO
      function actualizarCantidad(id, cantidad) {
        carrito[id].cantidad = parseInt(cantidad);
        actualizarCarrito();
      }

      // FUNCIÓN PARA ELIMINAR UN PRODUCTO DEL CARRITO
      function removerDelCarrito(id) {
        delete carrito[id];
        actualizarCarrito();
      }

      // FUNCIÓN PARA ENVÍAR EL CARRITO AL SERVIDOR
      function checkout() {
        fetch('includes/checkout.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(carrito)
        }).then(response => response.text())
        .then(data => alert(data));
      }
    </script>

  </head>

  <body>

    <!-- HEADER -->
    <?php include("includes/header.php"); ?>

  <!-- TIENDA -->
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
                    
                        <?php 
                        //SE HACE UNA CONSULTA PARA SACAR UNICAMENTE 1 SOLO NOMBRE DE LA TABLA MARCA
                        $query=mysqli_query($conexion,"SELECT DISTINCT * FROM marca");
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
                        //SE HACE UNA CONSULTA PARA SACAR UNICAMENTE 1 SOLO NOMBRE DE LA TABLA TIPO_PRODUCTO
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
          </div><br><hr><br><br>
        </section>

            <!-- ITEMS QUE APARECEN EN EL BUSCADOR -->       
       <?php
       //CONSULTA PARA ADQUIRIR LA BUSQUEDA REALIZADA POR FILTROS
       if(isset($_GET['buscar'])){
          $sql = "SELECT producto.id, producto.descripcion, producto.precio, producto.stock_central, producto.stock_cordoba, producto.stock_rosario,
          tipo_producto.nombre AS tipo, marca.nombre AS marca
          FROM producto
          JOIN tipo_producto ON producto.id_tipo_producto = tipo_producto.id
          JOIN marca ON producto.id_marca = marca.id
          WHERE 1=1";

        //EN CASO DE QUE SE HAYA PUESTO UN FILTRO EN LA BUSQUEDA, SE TOMA ESE DATO PUESTO
          if (!empty($_GET['busqueda'])) {
            $descripcion = $_GET['busqueda'];
            $sql .= " AND producto.descripcion LIKE '%$descripcion%'";
          }

        //EN CASO DE QUE SE HAYA PUESTO UN FILTRO EN LA MARCA, SE TOMA ESE DATO PUESTO
          if (!empty($_GET['marca'])) {
            $marca = $_GET['marca'];
            $sql .= " AND marca.nombre = '$marca'";
          }

        //EN CASO DE QUE SE HAYA PUESTO UN FILTRO EN EL TIPO, SE TOMA ESE DATO PUESTO
          if (!empty($_GET['tipo'])) {
            $tipo = $_GET['tipo'];
            $sql .= " AND tipo_producto.nombre = '$tipo'";
          }

          // EJECUTAR LA CONSULTA
          $resultado = $conexion->query($sql);

          // MOSTRAR LOS RESULTADOS
          if ($resultado->num_rows > 0) {?>
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
               <?php while ($row = $resultado->fetch_assoc()) {?>

                <div class="col">
                  <div class="card shadow-sm">
                    <?php

                        $id = $row['id'];
                        $imagen = "img/productos/" . $id . "/principal.jpeg";

                        //EN CASO DE QUE NO EXISTA UNA FOTO, SE COLOCA UNA PREDETERMINADA
                        if(!file_exists($imagen)){
                          $imagen = "img/no-photo.jpeg";
                        }
                    ?>
                    <!-- SE COLOCAN LOS DATOS SACADOS DE LA BDD -->
                      <img src="<?php echo $imagen; ?>">
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
                          <!-- SI HAY AL MENOS MÁS DE 1 PRODUCTO EN ALGUNA CASA, SE MUESTRA LA OPCIÓN DE COMPRAR, SINÓ APARECERÁ SIN STOCK -->
                          <?php if($row['stock_central']<1 && $row['stock_cordoba']<1 && $row['stock_rosario']<1){?>
                          <a href="" class="btn btn-secondary disabled">SIN STOCK</a>
                          <?php }else{?>
                            <p class="card-text">Producto: <?php echo $row['id']; ?></p>
                            <select id='<?php echo"ubicacion-{$row['id']}"; ?>'>
                              <!-- SI HAY MÁS DE 1 PRODUCTO EN UNA CASA, SE MUESTRA COMO OPCIÓN PARA COMPRAR EN ÉSE LUGAR -->
                              <?php if($row['stock_central']>0){
                                      ?><option value='central'>Central</option><?php
                                    }?>
                              <?php if($row['stock_cordoba']>0){ 
                                      ?><option value='cordoba'>Córdoba</option><?php 
                                    }?>
                              <?php if($row['stock_rosario']>0){
                                      ?><option value='rosario'>Rosario</option><?php 
                                    } ?>
                            </select><br><br><?php
                            echo"<button data-bs-toggle='offcanvas' data-bs-target='#offcanvasTop' aria-controls='offcanvasTop' class='btn btn-outline-success' onclick='agregarAlCarrito({$row['id']}, \"{$row['descripcion']}\", {$row['precio']}, document.getElementById(\"ubicacion-{$row['id']}\").value)'><i class='fas fa-shopping-cart fa-1x'></i> Añadir al carrito</button>";
                            } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
  <?php }else{?>
          <p style="text-align:center">No se encontraron resultados.</p>
  <?php }
      }
      ?>
    <!-- TOPCANVAS DEL CARRITO DE COMPRAS -->
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasTopLabel">Carrito de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
      <form action="">
        <table border="1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Precio</th>
              <th>Ubicación</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody id="carrito">
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4">Total</td>
              <td id="total">0</td>
              <!-- SE LLAMA A LA FUNCIÓN CHECKOUT QUE ÉSTA TE LLEVA A LA PÁGINA INCLUDES/CHECKOUT.PHP PARA HACER EL CHEQUEO -->
              <td><button class="btn btn-success" name="comprar" onclick="checkout()">Comprar</button></td>
            </tr>
          </tfoot>
      </table>
    </form>
    <br><br>  
  </div>
  </div>
  <br>
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