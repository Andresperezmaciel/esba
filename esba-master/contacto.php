<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rimberio Autopartes | Contacto</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="image/favicon.png">
    <script src="https://kit.fontawesome.com/ee57d1c92d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>


    <!-- Header -->
    <?php include("includes/header.php"); ?>

  <!-- Contacto -->
      <main class="fondocontacto">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                    <form action="" method="">
                        <div class="card border-warning rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-warning text-black text-center py-2">
                                    <h3><i class="fa fa-envelope"></i><strong> Contactanos</strong></h3>
                                    <p class="justify-content-center card-text"> <strong>Registrá tu comercio en el siguiente formulario para obtener un 
                                      número <br>de cliente y comenzar las transacciones. <a class="numeral">*</a></strong></p>
                                </div>
                            </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-warning"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" minlength="3" title="Ingrese minimo 3 caracteres" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-warning"></i></div>
                                        </div>
                                    <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-warning"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="phone" placeholder="1199999999" pattern="[1]{1}[1,5]{1}[1-9]{8}" title="El numero tiene que empezar con (11) o (15) y tener 8 numeros" required>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-warning"></i></div>
                                        </div>
                                        <textarea name="mensaje" class="form-control" placeholder="Envianos tu Mensaje" minlength="3" title="Ingrese minimo 3 caracteres" required></textarea>
                                    </div>
                                </div>
    
                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-warning btn-block rounded-0 py-2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </main>
    

    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>