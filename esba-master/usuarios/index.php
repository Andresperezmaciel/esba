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
    <title>Rimberio Autopartes</title>
    <link rel="icon" href="../image/favicon.png">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <!-- Header -->
    <?php include("includes/header.php");?>

        <!-- Sobre Rimberio -->

      <main>
        <div class="container-fluid fondorimberio">
          <div class="row">
            <div class="col-md-6 justify-content-center text-center">
              <img src="../image/logosinfondo2.png" alt="Logo de la empresa">
            </div>
            <div class="col-md-6 col-lg-6 justify-content-center text-center">
              <h3 class="decoraciontexto text-center">Sobre <a class="rimberiostyle">Rimberio</a></h3>
              <p class="parrafobody">Una empresa argentina dedicada, desde hace más de 25 años, a la comercialización en el 
                mercado local, importación y Exportación de autopartes y accesorios para el automóvil. <br><br>
                Como distribuidora de más de 300 firmas de primera línea a nivel nacional e internacional,
                 brindamos la gama más completa de productos, facilitando el contacto entre las mejores 
                 fábricas de autopartes de nuestro país y los distribuidores del exterior. <br><br>
                Con una participación constante en ferias internacionales y eventos del Sector, 
                estamos a la vanguardia en cuanto a innovación de productos y servicios.</p>
            </div>
          </div>
        </div>
        
        <!-- Servicios -->

        <div id="seccion_servicios" class="container">
          <div class="row">
            <div>
              <h3 class="text-center decoraciontextoservicios">Nuestros <a class="rimberiostyle">Servicios</a></h3>
              <br><br><br>
            </div>
            <div class="row justify-content-center text-center">
              <div class="col-md-3 col-sm-6">
                <div class="card border-warning">
                  <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                    <i class="fas fa-desktop fa-3x" style="color:goldenrod"></i>
                    <h5 class="card-title mt-3" style="color:goldenrod">Rimberio Compras</h5>
                    <p class="card-text" style="color:goldenrod">Nuestro catalogo en tu comercio, una manera de tener acceso a todos los productos.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card border-warning">
                  <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                    <i class="fas fa-cube fa-3x" style="color:goldenrod"></i>
                    <h5 class="card-title mt-3" style="color:goldenrod">Equipo de ventas</h5>
                    <p class="card-text" style="color:goldenrod">Contamos con un equipo de venta capacitado para asesorarlo en lo que necesite.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card border-warning">
                  <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                    <i class="fas fa-phone fa-3x" style="color:goldenrod"></i>
                    <h5 class="card-title mt-3" style="color:goldenrod">Call Center</h5>
                    <p class="card-text" style="color:goldenrod">Un equipo para brindar asesoramiento y soluciones via telefónica, chat y whatsapp.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="card border-warning">
                  <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                    <i class="fas fa-truck fa-3x" style="color:goldenrod"></i>
                    <h5 class="card-title mt-3" style="color:goldenrod">Logística</h5>
                    <p class="card-text" style="color:goldenrod">Cumpliendo en tiempo y forma todas las entregas brindando la tranquilidad al cliente.</p>
                  </div>
                </div>
            </div>
          </div>
          <div class="row justify-content-center text-center filaseparada">
            <div class="col-md-3 col-sm-6">
              <div class="card border-warning">
                <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                  <i class="fas fa-globe fa-3x" style="color:goldenrod"></i>
                  <h5 class="card-title mt-3"style="color:goldenrod">Comercio Exterior</h5>
                  <p class="card-text" style="color:goldenrod">Exportamos a más de 25 países en el mundo.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="card border-warning">
                <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                  <i class="fas fa-cube fa-3x" style="color:goldenrod"></i>
                  <h5 class="card-title mt-3" style="color:goldenrod">Variedad de productos</h5>
                  <p class="card-text" style="color:goldenrod">Contamos con más de 33.000 artículos.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="card border-warning">
                <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                  <i class="fas fa-cube fa-3x" style="color:goldenrod"></i>
                  <h5 class="card-title mt-3" style="color:goldenrod">Representación</h5>
                  <p class="card-text" style="color:goldenrod">Somos representantes exclusivos de Fiat y Ford.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="card border-warning">
                <div class="card-body justify-content-center text-center"style="background-color: #000000;">
                  <i class="fas fa-award fa-3x" style="color:goldenrod"></i>
                  <h5 class="card-title mt-3" style="color:goldenrod">Calidad de productos</h5>
                  <p class="card-text" style="color:goldenrod">Todos nuestros productos son revisados por expertos.</p>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
        <br><br><br><br></p>


        <!--Distribuidores Exclusivos-->

        <div class="container-fluid fondorimberio">
          <div class="row justify-content-between">
            <div class="col-md-12 justify-content-center text-center">
              <h3 class="text-center decoraciontextoservicios">Distribuidores <a class="rimberiostyle">Exclusivos</a></h3>
            </div>
            <div class="col-md-6 justify-content-end text-center imagendis1">
              <img src="../image/logofiat.png" alt="Logo de Fiat" height="500">
            </div>
            <div class="col-md-6 justify-content-center-start text-center imagendis2">
              <img src="../image/logoford.png" alt="Logo de Ford" height="500">
            </div>
          </div>
        </div>


        <!-- Sucursales -->

        <div id="seccion_sucursales" class="container">
          <div class="title text-center">
            <h3 class="text-center decoraciontextoservicios">Centros de <a class="rimberiostyle">Distribución</a></h3>
            <br><br><br>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3 offset-md-1 bg-black border border-warning border-5">
                  <div class="item">
                      <div class="content_box">
                          <div class="service_title">
                              <div class="title text-center">
                                  <h4 style="color:goldenrod">Casa Central</h4>
                              </div>
                          </div>
                          <p style="color:goldenrod">Av. Warnes 1489, C1427 - CABA</p>
                          <p style="color:goldenrod">Tel: +54 11 69386648</p>
                          <iframe width="100%" height="auto" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d385.0131452930636!2d-58.45655980138262!3d-34.59735883979854!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1715871680150!5m2!1ses!2sar" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 offset-md-1 bg-black border border-warning border-5">
                  <div class="item">
                      <div class="content_box">
                          <div class="service_title">
                              <div class="title text-center">
                                  <h4 style="color:goldenrod">Córdoba</h4>
                              </div>
                          </div>
                          <p style="color:goldenrod">Santiago del Estero 241</p>
                          <p style="color:goldenrod">Tel: +54 351 428 3959</p>
                          <iframe width="100%" height="auto" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d564.135906284831!2d-64.17648597206747!3d-31.415162609456385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1715871557973!5m2!1ses!2sar" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 offset-md-1 bg-black border border-warning border-5">
                  <div class="item">
                      <div class="content_box">
                          <div class="service_title">
                              <div class="title text-center">
                                  <h4 style="color:goldenrod">Rosario</h4>
                              </div>
                          </div>
                          <p style="color:goldenrod">Av. Francia 1695</p>
                          <p style="color:goldenrod">Tel: +54 341 528 8640</p>
                          <iframe width="100%" height="auto" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2205.9897084712634!2d-60.6694210429902!3d-32.95231738695916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6539335d7d75b%3A0xec4086e90258a557!2sRosario%2C%20Santa%20Fe!5e0!3m2!1ses!2sar!4v1715871087236!5m2!1ses!2sar" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br> <br> <br>
      </main>
    

    <!-- DATOS DE LA EMPRESA -->
    <div class="empresa">
    <div class="colum25">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="110" align="center" valign="middle"><span>5.500</span><br>
              Clientes en<br>
              todo el país </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="colum25">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="110" align="center" valign="middle"><span>35.000</span><br>
              Metros cuadrados<br>
              de depósito </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="colum25">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="110" align="center" valign="middle"><span>1.100</span><br>
              Metros cuadrados<br>
              de oficinas </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="colum25">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="110" align="center" valign="middle"><span>+150</span><br>
              Empleados<br>
               </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="colum40">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="120" align="center" valign="middle"><span>400</span><br>
              Pedidos<br>
              por día </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="colum20">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="110" align="center" valign="middle"><span>36.000<br>
              Artículos en       </span><br>
              Catálogo<br> </td>
          </tr>
        </tbody></table>
      </div>
    </div>
    <div class="colum40">
      <div class="circulos">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td height="110" align="center" valign="middle"><span>45</span><br>
              Representantes<br>
               de ventas<br></td>
          </tr>
        </tbody></table>
      </div>
    </div>
  </div>
  
    <!-- FOOTER -->
    <?php include("includes/footer.php");?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
<?php
}else{
  header("Location:http://localhost/esba-master/login.php");
  exit;
}


?>